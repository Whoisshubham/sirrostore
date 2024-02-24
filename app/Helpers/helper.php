<?php
use App\Models\Categorie;
use App\Models\HomeSection;
use App\Models\Order;
use App\Models\Pages;
use App\Models\Setting;
use Illuminate\Cache\RateLimiting\Limit;


function settings()
{
    $settingData = Setting::first();
    return $settingData;
}
function categories()
{
    $getAllcategories = Categorie::whereStatus(1)->get();
    return $getAllcategories;
}

function pages()
{
    $page = Pages::whereStatus('1')->get();
    return $page;
}

function str_limit($string, $limit)
{
    $newText = Str::limit($string, $limit, '...');
    return $newText;
}

function orderAddress($orderId)
{
    $getDetails = Order::with(['countrieName', 'stateName', 'cityName'])->where('orders_id', $orderId)->first();
    return $getDetails;
}
function bagCount()
{
    if (session('cart') !== null) {
        $cart = count(session('cart'));
    } else {
        $cart = 0;
    }
    return $cart;
}
?>
