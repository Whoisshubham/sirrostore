<?php

use App\Http\Controllers\backend\CartController;
use App\Http\Controllers\backend\CategoriesController;
use App\Http\Controllers\backend\CheckoutController;
use App\Http\Controllers\backend\CountrieController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\SubCategoriesController;
use App\Http\Controllers\CreatePageController;
use App\Http\Controllers\forntend\SearchController;
use App\Http\Controllers\frontend\GoogleLoginController;
use App\Http\Controllers\frontend\OrderController;
use \App\Http\Controllers\frontend\ProductController as FrountEndProductController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\frontend\UserRegisterController;
use App\Http\Controllers\backend\OfferController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'index']);


# ==========> User Section Start <<<<<<<<<<<<<

# >>>>>>>>>>>>>Admin Login Section
Route::get('admin/login', [LoginController::class, 'login']);
Route::post('admin-auth', [LoginController::class, 'loginAuth']);


#>>>>>>>>>>>>>Cart Seciton
Route::get('cart', [CartController::class, 'index']);


# >>>>>>>>>>>>> CarT Add And Remove <<<<<<<<<<<<
Route::get('add-cart/{productId}', [CartController::class, 'addCart'])->name('addCart');
Route::get('remove-cart/{arrayId}', [CartController::class, 'deleteCart'])->name('removeCrat');
Route::get('quntity-update/{arrayId}', [CartController::class, 'updateCart'])->name('quntityUpdate');
Route::get('quntity-remove/{arrayId}', [CartController::class, 'removeCart'])->name('quntityRemove');


#Size Get
Route::get('get-size/{productId}', [CartController::class, 'getSize'])->name('getSize');


#>>>>>>>>>>>>>Product Deatils
Route::get('products-list', [FrountEndProductController::class, 'productsList']);
Route::get('products-list/{slug}', [FrountEndProductController::class, 'productsList']);
Route::get('product-details/{slug}', [FrountEndProductController::class, 'productDetails']);



# >>>>>>>>>>>>>Register User
Route::post('user-store', [UserRegisterController::class, 'store']);

# >>>>>>>>>>>>>Login User
Route::post('user-login', [UserRegisterController::class, 'login']);



#>>>>>>>>>>>>>>>>>>>>Checkout Section <<<<<<<<<<<<
Route::get('checkout', [CheckoutController::class, 'index']);
Route::get('account', [CheckoutController::class, 'account']);




#>>>>>>>>>>>>>>>>>>>>Checkout Section <<<<<<<<<<<<
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store']);


# >>>>>>>>>>>>>>>>> Pages Section <<<<<<<<<<<<<<<<<<<
Route::get('pages/{slug}', [PagesController::class, 'show']);


#Search Section
Route::get('serach/{searchtext}', [SearchController::class, 'search'])->name('searchProduct');

# >>>>>>>>>>>>>>>>> Website Section End <<<<<<<<<<<<<<<<<<<




# >>>>>>>>>>>>>>>>>> After Login User Section <<<<<<<<<<<<
Route::group(['middleware' => 'UserAuth'], function () {

    #Order Section
    Route::post('order', [OrderController::class, 'order']);
    Route::get('orders-details/{id}', [OrderController::class, 'ordersDetails']);


    #Password Change Section
    Route::post('user-password', [UserRegisterController::class, 'passswordChange']);

   
    Route::get('logout', [UserRegisterController::class, 'logout']);
});










# >>>>>>>>>>>>>>>>>> Admin Section <<<<<<<<<<<<
Route::group(['prefix' => 'admin', 'middleware' => ['AdminAuth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    #>>>>>>>>>>>>>>>>>>>Slider Section <<<<<<<<<<
    Route::get('contact-us', [ContactController::class, 'adminContact']);
    Route::get('contact-us-status/{id}', [ContactController::class, 'status']);
    Route::get('contact-us-delete/{id}', [ContactController::class, 'destory']);

    #>>>>>>>>>>>>>>>>>>>Slider Section <<<<<<<<<<
    Route::get('slider', [SliderController::class, 'index']);
    Route::post('store-slider', [SliderController::class, 'store']);
    Route::get('status-slider/{id}', [SliderController::class, 'status']);
    Route::get('delete-slider/{id}', [SliderController::class, 'destroy']);

    # >>>>>>>>>>>>>>>>>> Categories Section <<<<<<<<<<<<
    Route::get('categories', [CategoriesController::class, 'index']);
    Route::get('edit-categorie/{categorieId}', [CategoriesController::class, 'edit']);
    Route::post('update-categorie/{categorieId}', [CategoriesController::class, 'update']);
    Route::get('categories-status/{id}', [CategoriesController::class, 'status']);
    Route::post('store-categories', [CategoriesController::class, 'store']);

    # >>>>>>>>>>>>>>>>>> Sub-categorie Section <<<<<<<<<<<<
    Route::get('sub-category', [SubCategoriesController::class, 'index']);
    Route::get('edit-sub-category/{categorieId}', [SubCategoriesController::class, 'edit']);
    Route::post('update-sub-category/{categorieId}', [SubCategoriesController::class, 'update']);
    Route::get('sub-category-status/{id}', [SubCategoriesController::class, 'status']);
    Route::post('store-sub-category', [SubCategoriesController::class, 'store']);

    # >>>>>>>>>>>>>>>>>> Product Section <<<<<<<<<<<<
    Route::get('products', [ProductController::class, 'index']);
    Route::post('products-store', [ProductController::class, 'store']);
    Route::get('add-product', [ProductController::class, 'create']);
    Route::get('product-delete/{id}', [ProductController::class, 'destroy']);
    Route::get('product-status/{id}', [ProductController::class, 'status']);
    Route::get('product-view/{slug}', [ProductController::class, 'view']);
    Route::get('product-edit/{slug}', [ProductController::class, 'edit']);
    Route::post('products-update/{slug}', [ProductController::class, 'update']);
    Route::get('product-attr-delete/{skuId}', [ProductController::class, 'deleteAttr'])->name('productAttr');

    #Import Products
    Route::get('import-products', [ProductController::class, 'import']);
    Route::post('import-products', [ProductController::class, 'productsImport']);

    #Splash Section
    Route::get('offer-order', [OfferController::class, 'index']);
    Route::post('offer-store', [OfferController::class, 'store']);


    # Create Page
    Route::get('create-page', [CreatePageController::class, 'index']);
    Route::get('page-content/{id}', [CreatePageController::class, 'contentAdd']);
    Route::get('page-delete/{id}', [CreatePageController::class, 'delete']);
    Route::post('add-page', [CreatePageController::class, 'store']);
    Route::get('edit-content/{id}', [CreatePageController::class, 'contentAdd']);
    Route::post('page-content/store/{id}', [CreatePageController::class, 'pageContent']);


    # >>>>>>>>>>>>>>>>>> Order Section  <<<<<<<<<<<<<
    Route::get('order', [\App\Http\Controllers\backend\OrderController::class, 'index']);
    Route::get('order-details/{id}', [\App\Http\Controllers\backend\OrderController::class, 'details']);
    Route::get('approved/{id}', [\App\Http\Controllers\backend\OrderController::class, 'approved']);
    Route::get('reject/{id}', [\App\Http\Controllers\backend\OrderController::class, 'reject']);
    Route::post('export-orders', [\App\Http\Controllers\backend\OrderController::class, 'exportOrder']);


    # >>>>>>>>>>>>>>>>>> Delevery Countries Section <<<<<<<<<<
    Route::get('countries', [CountrieController::class, 'countries']);
    Route::get('add-countrie', [CountrieController::class, 'countries_add']);
    Route::post('store-countrie', [CountrieController::class, 'countries_store']);


    # >>>>>>>>>>>>>>>>>> Delevery State Section <<<<<<<<<<
    Route::get('states', [CountrieController::class, 'states']);
    Route::get('add-states', [CountrieController::class, 'states_add']);
    Route::post('store-states', [CountrieController::class, 'states_store']);


    # >>>>>>>>>>>>>>>>>> Delevery city Section <<<<<<<<<<
    Route::get('city', [CountrieController::class, 'city']);
    Route::get('add-city', [CountrieController::class, 'city_add']);
    Route::post('store-city', [CountrieController::class, 'city_store']);

    # >>>>>>>>>>>>>>>>>> Setting Section <<<<<<<<<<<<
    Route::get('setting', [SettingController::class, 'index']);
    Route::post('setting-store', [SettingController::class, 'store']);

    # >>>>>>>>>>>>>>>>>> Gallery Section <<<<<<<<<<<<
    Route::get('gallery', [GalleryController::class, 'index']);
    Route::post('gallery-store', [GalleryController::class, 'store']);
    Route::get('gallery/{slug}', [GalleryController::class, 'view']);
    Route::post('gallery/upload/{slug}', [GalleryController::class, 'upload']);
    Route::get("gallery/unlink/image/{id}", [GalleryController::class, 'unlink']);



});

Route::get('get-cities/{countryId}', [CountrieController::class, 'stateList'])->name('get-cities');
Route::get('get-states/{countryId}', [CountrieController::class, 'stateList'])->name('get-state');
Route::get('get-city/{stateId}', [CountrieController::class, 'getCity'])->name('get-city');
Route::get('get-pincode/{pincode}', [CountrieController::class, 'getPincode'])->name('get-pincode');

#Login With Google
Route::get('google-login', [GoogleLoginController::class, 'index']);
Route::get('google-auth', [GoogleLoginController::class, 'handleGoogleCallback']);
