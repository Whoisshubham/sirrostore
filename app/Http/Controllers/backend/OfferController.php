<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $orderDetails = Product::with('OfferOne')->whereStatus(1)->get();
        return view('Backend.offer.index', compact('orderDetails'));
    }

    public function store(Request $request)
    {
        $offferDetails = Offer::truncate();
        foreach ($request->product_id as $key => $value) {
            $offferDetails = new Offer;
            $offferDetails->product_id = $value;
            $offferDetails->save();
        }

        return response()->json([
            "responseCode" => 200,
            "responseMessage" => "Saved Succesfully!",
            "responseUrl" => url()->previous(),
        ]);

    }
}
