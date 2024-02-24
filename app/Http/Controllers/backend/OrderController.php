<?php

namespace App\Http\Controllers\backend;

use App\Exports\ExportOrders;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderOverview;
use App\Models\Product;
use App\Models\ProductOverview;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Shuchkin\SimpleXLSXGen;

class OrderController extends Controller
{
    public function index()
    {
        $userOrder = Order::with(['usersDetails'])->orderBy('id', "DESC")->get();
        return view('Backend.orders.index', compact('userOrder'));
    }

    public function details($productId)
    {
        $productDetails = OrderOverview::where('order_id', $productId)->get();
        return view('Backend.orders.details', compact('productDetails'));
    }
    public function approved($productId)
    {
        $productDetails = Order::with(['countrieName', 'stateName', 'cityName'])->where('orders_id', $productId)->first();
        $productDetails->order_status = 1;
        $orderDetailCourier = OrderOverview::where('order_id', $productDetails->orders_id)->get();

        $orderList = [];
        $PickDetails = [];
        foreach ($orderDetailCourier as $key => $value) {
            $findProductSku = ProductOverview::find($value->product_id);

            $orderList = [
                "order_id" => $value->order_id,
                'SKU_ID' => $findProductSku->sku_id,
                "qty" => $value->qty,
                "price" => $value->price,
            ];

            $PickDetails[] = ["PD", $value->order_id, $key + 1, $findProductSku->sku_id, $value->qty, $value->price];
        }

        // $data= Storage::disk('sftp')->allFiles();
        $books = [
            ['PH', $productDetails->orders_id, '', $productDetails->fname ?? null, $productDetails->fname ?? null, $productDetails->address, '', $productDetails->cityName->name, $productDetails->stateName->name, $productDetails->pincode, $productDetails->countrieName->name, '', '', '', '', '', '', '', '', '', 'Carrier & Service Level', $productDetails->payment_mode == "COD" ? "C" : "P", '', $productDetails->updated_at, '', ''],

        ];
        foreach ($PickDetails as $key => $value) {
            $def = ["PD", $value[1], $value[2], $value[3], $value[4], $value[5]];
            array_push($books, $def);
        }
        $time = date('Y-m-d H:i:s');
        $result = $productDetails->save();
        $xlsx = SimpleXLSXGen::fromArray($books);
        Storage::disk('sftp')->put("/in/$time.xlsx", $xlsx);
        if ($result) {
            return redirect()->back()->with('message', "Update Succesfully!");
        }

        return redirect()->back()->with('message', "Somthing Went Wrong!");
    }
    public function reject($productId)
    {
        $productDetails = Order::where('orders_id', $productId)->first();
        $productDetails->order_status = 3;
        $result = $productDetails->save();
        if ($result) {
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function exportOrder(Request $request)
    {
        $orderData = Order::with(['usersDetails', 'cityName', 'stateName', 'countrieName'])->whereOrderStatus($request->export_by)->get();
        $data = array();
        foreach ($orderData as $key => $value) {
            if ($value->order_status == 0) {
                $status = "PENDING";
            } elseif ($value->order_status == 1) {
                $status = "APPROVED";
            } else {
                $status = "REJECT";

            }
            $getData[] = [
                $key + 1,
                $value->usersDetails->fname . "-" . $value->usersDetails->lname,
                $value->fname . "-" . $value->lname,
                $value->orders_id,
                $value->phone,
                $value->payment_mode,
                $value->address . "," . $value->cityName->name . "," . $value->stateName->name . "," . $value->countrieName->name,
                $value->pincode,
                $value->final_price,
                $status,
                $value->created_at
            ];
            $data = $getData;
        }
        return Excel::download(new ExportOrders($data), 'Detail.xlsx');
    }
}
