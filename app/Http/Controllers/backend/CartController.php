<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductOverview;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $cartList=session('cart');
        return view('Frontend.cart',compact('cartList'));
    }

    public function addCart($productId)
    {

        $productId = (int) $productId;
        $cart = Session::get('cart');
        if (isset($cart)) {
            for ($arrayCount = 0; $arrayCount < count($cart); $arrayCount++) {
                // dd($productId,$cart[$arrayCount]);
                if ($cart[$arrayCount]['id'] == $productId) {
                    return response()->json([
                        "responseCode" => 403,
                        "responseMessage" => "Already Added In Cart",
                    ]);
                }
            }
        }
        $productOverviewData = ProductOverview::find($productId);
        $productData = Product::find($productOverviewData->product_id);
        $image = json_decode($productData->image);
        $cart[] = array(
            "id" => (int) $productOverviewData->id,
            "image" => $image[0] ?? null,
            "product_name" => $productData->product_name,
            "product_sale_price" => $productOverviewData->sale_price,
            "qty" => 1,
        );
        Session::put('cart', $cart);
        if ($cart == null) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somting went wrong!",
            ]);
        } else {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Added in cart!",
            ]);
        }
    }

    public function deleteCart($id)
    {
        $cart = Session::get('cart');
        unset($cart[$id]);
        Session::put('cart', $cart);
        return response()->json([
            "responseCode" => 200,
            "responseMessage" => "Removed Succesfully!",
        ]);
    }

    public function updateCart($arrayPosition)
    {
        $cart = Session::get('cart');


        $cart[$arrayPosition] = array(
            "id" => (int) $cart[$arrayPosition]['id'],
            "image" => $cart[$arrayPosition]['image'],
            "size" => $cart[$arrayPosition]['size'],
            "product_name" => $cart[$arrayPosition]['product_name'],
            "product_sale_price" => $cart[$arrayPosition]['product_sale_price'],
            "qty" => $cart[$arrayPosition]['qty'] + 1,
        );

        Session::put('cart', $cart);
    }
    public function removeCart($arrayPosition)
    {
        $cart = Session::get('cart');


        $cart[$arrayPosition] = array(
            "id" => (int) $cart[$arrayPosition]['id'],
            "image" => $cart[$arrayPosition]['image'],
            "size" => $cart[$arrayPosition]['size'],
            "product_name" => $cart[$arrayPosition]['product_name'],
            "product_sale_price" => $cart[$arrayPosition]['product_sale_price'],
            "qty" => $cart[$arrayPosition]['qty'] - 1,
        );
        Session::put('cart', $cart);
    }

    public function getSize($productId)
    {

        $productData = ProductOverview::where("product_id",$productId)->select('id','size')->get();
        if ($productData == null) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Product Not Found!",
            ]);
        } else {
            return response()->json([
                "responseCode" => 200,
                "responseData" => json_decode($productData),
            ]);
        }

    }
}
