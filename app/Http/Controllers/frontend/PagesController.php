<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Pages;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $productList = Product::with(['productOne'])->orderBy('id', "DESC")->whereStatus(1)->get();
        $sliderList = Slider::whereStatus(1)->get();
        $offerDetails=Offer::with(['productDetails'])->get();
        return view('Frontend.index', compact('productList', 'sliderList','offerDetails'));
    }

    public function show($slug)
    {
        $pageDateal = Pages::whereSlug($slug)->first();
        return view('Frontend.pages.index', compact('pageDateal'));
    }
    public function account()
    {
        if (auth()->user()) {
            $userOrder=Order::orderBy('id',"DESC")->whereUserId(auth()->user()->id)->get();
            return view('Frontend.account',compact('userOrder'));
        }
        return redirect()->back();
    }


}
