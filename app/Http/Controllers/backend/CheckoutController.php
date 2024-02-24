<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Countrie;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $countrieList=Countrie::whereStatus(1)->get();
        return view('Frontend.checkout',compact('countrieList'));
    }
    public function account(){
        return view('Frontend.account');
    }
}
