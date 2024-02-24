<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderOverview;
use App\Models\Product;
use App\Models\ProductOverview;
use Illuminate\Http\Request;
use Validator;
use Session;

class OrderController extends Controller
{
    public function order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "fname" => "required",
            "lname" => "required",
            "phone" => "required|numeric",
            "address" => "required",
            "pincode" => "required|numeric",
            "state_id" => "required",
            "city_id" => "required",
            "countrie_id" => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        try {
            //code...

            $orderDetails = session('cart');
            if ($orderDetails == null) {
                return response()->json([
                    "responseCode" => 403,
                    "responseMessage" => "Select an Product!"
                ]);
            }
            $orderDetailsGet = [];
            $finalPrice = 0;
            foreach ($orderDetails as $key => $productCheckout) {
                $productDetail = ProductOverview::find($productCheckout['id']);
                $productDetail->stock = $productDetail->stock - $productCheckout['qty'];
                $orderDetailsGet[] = [
                    'id' => $productCheckout['id'],
                    'name' => $productCheckout['product_name'],
                    'image' => $productCheckout['image'],
                    'size' => $productCheckout['size'],
                    'price' => $productDetail->sale_price,
                    'qty' => $productCheckout['qty']
                ];
                $productPrice = (int) $productDetail->sale_price * $productCheckout['qty'];
                $finalPrice = (int) $finalPrice + $productPrice;
                $productDetail->save();
            }
            $orderId = time() + date('d') + date('m') + date('Y');

            $storeOrder = new Order;
            $storeOrder->user_id = auth()->user()->id ?? null;
            $storeOrder->orders_id = $orderId ?? null;
            $storeOrder->fname = $request->fname ?? null;
            $storeOrder->lname = $request->lname ?? null;
            $storeOrder->phone = $request->phone ?? null;
            $storeOrder->address = $request->address ?? null;
            $storeOrder->pincode = $request->pincode ?? null;
            $storeOrder->state_id = $request->state_id ?? null;
            $storeOrder->city_id = $request->city_id ?? null;
            $storeOrder->countrie_id = $request->countrie_id ?? null;
            $storeOrder->gift_card = $request->gift_card ?? null;
            $storeOrder->sub_total = $finalPrice ?? null;
            $storeOrder->payment_mode = "COD";
            $storeOrder->final_price = $finalPrice ?? null;

            foreach ($orderDetailsGet as $key => $orderOverview) {
                $storeDetailsOrder = new OrderOverview;
                $storeDetailsOrder->product_id = $orderOverview['id'] ?? null;
                $storeDetailsOrder->order_id = $orderId ?? null;
                $storeDetailsOrder->user_id = auth()->user()->id ?? null;
                $storeDetailsOrder->product_name = $orderOverview['name'] ?? null;
                $storeDetailsOrder->image = $orderOverview['image'] ?? null;
                $storeDetailsOrder->size = $orderOverview['size'] ?? null;
                $storeDetailsOrder->price = $orderOverview['price'] ?? null;
                $storeDetailsOrder->qty = $orderOverview['qty'] ?? null;
                $storeDetailsOrder->save();
            }
            $result = $storeOrder->save();
            if ($result) {
                Session::forget('cart');
                return response()->json([
                    "responseCode" => 200,
                    "responseMessage" => "Order Created Succesfully!",
                    "responseUrl" => url('account')
                ]);
            } else {
                return response()->json([
                    "responseCode" => 403,
                    "responseMessage" => "Somthing Went Wrong!"
                ]);
            }
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function ordersDetails($orderDetailsId)
    {
        $orderDetails = Order::whereOrdersId($orderDetailsId)->first();
        return view('Frontend.orderSee');
    }
}
