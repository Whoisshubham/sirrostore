<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\ProductImport;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\ProductOverview;
use App\Models\Size;
use App\Models\SubCategorie;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
use File;

class ProductController extends Controller
{
    public function index()
    {
        $productList = Product::with(['productCategorie'])
            ->orderBy('id', 'DESC')
            ->paginate(12);
        return view('Backend.product.index', compact('productList'));
    }
    public function create()
    {
        $categorieList = SubCategorie::whereStatus(1)->get();
        $edit = false;
        $addAttribute = Product::with(['productCategorie'])
            ->orderBy('id', 'DESC')
            ->get();
        return view('Backend.product.create', compact('categorieList', 'edit', 'addAttribute'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product' => 'required|unique:products,product_name',
            'title' => 'required',
            'image' => 'required',
            'categorie' => 'required',
            'product_overview' => 'required',
            'accordion_name' => 'required',
            'descipition' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'responseCode' => 403,
                'responseMessage' => $validator->errors()->first(),
            ]);
        }
        if ($request->file('image') == null) {
            return response()->json([
                'responseCode' => 403,
                'responseMessage' => 'Image required!',
            ]);
        }
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->product)));
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $key => $value) {
                $image = $request->file('image')[$key];
                $name = time() . pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/products');
                $image->move($destinationPath, $name);
                $file_path = '/products' . '/' . $name;
                $array[] = $file_path;
            }
        }

        foreach ($request->accordion_name as $key => $value) {
            $Accordion[] = [$request->accordion_name[$key], $request->descipition[$key]];
        }

        // Encode Method
        $accordanData = json_encode($Accordion);
        $image = json_encode($array);
        $productId = time() + rand(100, 100000);    

        $storeProduct = new Product();
        $storeProduct->sub_category_id = $request->categorie ?? null;
        $storeProduct->product_name = $request->product ?? null;
        $storeProduct->shiping_charge = $request->shiping_charge ?? null;
        $storeProduct->image = $image ?? null;
        $storeProduct->slug = $slug ?? null;
        $storeProduct->title = $request->title ?? null;
        $storeProduct->accordion = $accordanData ?? null;
        $storeProduct->product_overview = $request->product_overview ?? null;
        $result = $storeProduct->save();

        foreach ($request->product_price as $key => $value) {
            $skuId = time() + rand(100, 100000);
            $storeProductOverview = new ProductOverview();
            $storeProductOverview->product_id = $storeProduct->id ?? null;
            $storeProductOverview->product_name = $request->product ?? null;
            $storeProductOverview->sku_id = $skuId ?? null;
            $storeProductOverview->product_price = $value ?? null;
            $storeProductOverview->sale_price = $request->product_sale_price[$key] ?? null;
            $storeProductOverview->stock = $request->stock[$key] ?? null;
            $storeProductOverview->save();
        }

        if ($result) {
            return response()->json([
                'responseCode' => 200,
                'responseMessage' => 'Product Added Succesfully!',
                'responseUrl' => url('admin/products'),
            ]);
        } else {
            return response()->json([
                'responseCode' => 403,
                'responseMessage' => 'Somthing Went Wrong!',
            ]);
        }
    }

    public function destroy($id)
    {
        $id = base64_decode($id);
        $findProduct = Product::find($id);
        $image = json_decode($findProduct->image);
        foreach ($image as $value) {
            if (File::exists($value)) {
                File::delete($value);
            }
        }
        $result = $findProduct->destroy($id);
        if ($result) {
            return response()->json([
                'responseCode' => 200,
                'responseMessage' => 'Delete Succesfully!',
            ]);
        } else {
            return response()->json([
                'responseCode' => 403,
                'responseMessage' => 'Somthing Went Wrong!',
            ]);
        }
    }

    public function status($productId)
    {
        $productId = base64_decode($productId);
        $productFind = Product::find($productId);
        if ($productFind->status == 1) {
            $productFind->status = 0;
        } else {
            $productFind->status = 1;
        }
        $productFind->update();
        return response()->json([
            'responseCode' => 200,
            'responseMessage' => 'Status Updated Succesfully!',
        ]);
    }

    public function view($slug)
    {
        $slug = base64_decode($slug);
        $productDetails = Product::with(['productOverview', 'productCategorie'])
            ->whereSlug($slug)
            ->first();
        return view('Backend.product.details', compact('productDetails'));
    }
    public function edit($slug)
    {
        $slug = base64_decode($slug);
        $productDetails = Product::with(['productOverview'])
            ->whereSlug($slug)
            ->first();
        $subCatgory = SubCategorie::whereStatus(1)->get();
        return view('Backend.product.edit', compact('productDetails', 'subCatgory'));
    }

    public function update(Request $request, $slug)
    {
        $productDetails = Product::whereSlug($slug)->first();

        if ($productDetails == null) {
            return response()->json([
                'responseCode' => 403,
                'responseMessage' => 'Invalid Product!',
            ]);
        }
        $validator = Validator::make($request->all(), [
            'product' => 'required|unique:products,product_name,' . $productDetails->id,
            'title' => 'required',
            'categorie' => 'required',
            'product_overview' => 'required',
            'accordion_name' => 'required',
            'descipition' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'responseCode' => 403,
                'responseMessage' => $validator->errors()->first(),
            ]);
        }
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->product)));
        if ($request->file('image')) {
            foreach ($request->file('image') as $key => $value) {
                $image = $request->file('image')[$key];
                $name = time() . pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/products');
                $image->move($destinationPath, $name);
                $file_path = '/products' . '/' . $name;
                $array[] = $file_path;
            }
            $image = json_encode($array);
        } else {
            $image = $productDetails->image;
        }

        foreach ($request->accordion_name as $key => $value) {
            $Accordion[] = [$request->accordion_name[$key], $request->descipition[$key]];
        }

        // Encode Method
        $accordanData = json_encode($Accordion);

        $productDetails->image = $image ?? null;
        $productDetails->slug = $slug ?? null;
        $productDetails->product_name = $request->product ?? null;
        $productDetails->category_id = $request->categorie ?? null;
        $productDetails->title = $request->title ?? null;
        $productDetails->shiping_charge = $request->shiping_charge ?? 0;
        $productDetails->accordion = $accordanData ?? null;
        $productDetails->product_overview = $request->product_overview ?? null;
        $productDetails->status = $request->status ?? null;
        $result = $productDetails->save();

        foreach ($request->stock as $key => $value) {
            if (isset($request->skuId[$key])) {
                $productOverviewUpdate = ProductOverview::where('sku_id', $request->skuId[$key])->first();
                $productOverviewUpdate->product_price = $request->product_price[$key] ?? null;
                $productOverviewUpdate->sale_price = $request->product_sale_price[$key] ?? null;
                $productOverviewUpdate->product_name = $request->product ?? null;
                $productOverviewUpdate->stock = $request->stock[$key] ?? null;
                $productOverviewUpdate->save();
            } else {
                $skuId = time() + rand(100, 100000);
                $productOverviewUpdate = new ProductOverview();
                $productOverviewUpdate->sku_id = $skuId ?? time();
                $productOverviewUpdate->product_price = $request->product_price[$key] ?? null;
                $productOverviewUpdate->sale_price = $request->product_sale_price[$key] ?? null;
                $productOverviewUpdate->product_id = $productDetails->id ?? null;
                $productOverviewUpdate->product_name = $request->product ?? null;
                $productOverviewUpdate->stock = $request->stock[$key] ?? null;
                $productOverviewUpdate->save();
            }
        }
        if ($result) {
            return response()->json([
                'responseCode' => 200,
                'responseMessage' => 'Product Updated Succesfully!',
                'responseUrl' => url('admin/products'),
            ]);
        } else {
            return response()->json([
                'responseCode' => 403,
                'responseMessage' => 'Somthing Went Wrong!',
            ]);
        }
    }

    public function import()
    {
        return view('Backend.product.import');
    }
    public function productsImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xls,xlsx,xlxm,xlm',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'responseCode' => 403,
                'responseMessage' => $validator->errors()->first(),
            ]);
        }

        Excel::import(new ProductImport(), $request->file('file'));
        return redirect()->back();
    }

    public function deleteAttr($skuId)
    {
        $deleteAttr = ProductOverview::where('sku_id', $skuId)->first();
        $result = $deleteAttr->destroy($deleteAttr->id);
        if ($result) {
            return response()->json([
                'responseCode' => 200,
                'responseMessage' => 'Remove Succesfully',
            ]);
        } else {
            return response()->json([
                'responseCode' => 200,
                'responseMessage' => 'Something Went Wrong!',
            ]);
        }
    }
}
