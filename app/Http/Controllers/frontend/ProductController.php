<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function productsList($slug = null)
    {
        if ($slug !== null) {
            $categorie = Categorie::whereStatus(1)->whereSlug($slug)->first();
            if ($categorie == null) {
                return redirect(404);
            }

            $productList = Product::with(['productOne'])->where('category_id', $categorie->id)->paginate(8);
        } else {
            $categorie =[];
            $productList = Product::with(['productOne'])->whereStatus('1')->paginate(8);
        }
        return view('Frontend.productlist', compact('productList', 'categorie'));
    }
    public function productDetails($slug)
    {
        // $productData = Product::where('slug', $slug)->first();
        // if ($productData == null) {
        //     return redirect(404);
        // }
        $relatedProduct=[];
        $productData=[];
        // $relatedProduct = Product::where('category_id', $productData->category_id)->whereStatus(1)->where('id', "!=", $productData->id)->get();
        return view('Frontend.products-view', compact('productData', 'relatedProduct'));
    }
}
