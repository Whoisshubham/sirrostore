<?php

namespace App\Http\Controllers\forntend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($searchText)
    {
        $searchDetails = Product::whereStatus(1)->where('product_name', 'like',  $searchText.'%')->get();
        if (count($searchDetails) > 0) {
            return response()->json([
                "responseCode" => 200,
                "responseData" => $searchDetails
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseData" => null
            ]);
        }
    }
}
