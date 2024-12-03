<?php

use Illuminate\Support\Facades\Route;
//All Admins Routing

Route::prefix('auth')->group(function () {

    Route::post('login',[\App\Http\Controllers\Admis\Auth\AuthController::class, 'login'])->name('login');

});

//Enable middleware

Route::middleware('auth:admins')->group(function () {

    //Product Categories
    Route::prefix('product_categories')->as('product_categories')->group(function () {

    });
    Route::apiResource('product_categories',App\Http\Controllers\Admins\Product_Categories\ProductCategoryController::class);

    //Product Comments
    Route::prefix('product_comments')->as('product_comments')->group(function () {

    });
    Route::apiResource('product_comments',App\Http\Controllers\Admins\Product_Comments\ProductCommentController::class);

    //Product Media
    Route::prefix('product_media')->as('product_media')->group(function () {

    });
    Route::apiResource('product_media',App\Http\Controllers\Admins\Product_Media\ProductMediaController::class);

    //Product Rates
    Route::prefix('product_Rates')->as('product_Rates')->group(function () {

    });
    Route::apiResource('product_Rates',App\Http\Controllers\Admins\Product_Rates\ProductRateController::class);

    //Product Shop Favourite
    Route::prefix('product_shop_favourite')->as('product_shop_favourite')->group(function () {

    });
    Route::apiResource('product_shop_favourite',App\Http\Controllers\Admins\Product_Shop_Favourite\ProductShopFavouriteController::class);

    //Shop Categories
    Route::prefix('shop_categories')->as('shop_categories')->group(function () {

    });
    Route::apiResource('shop_categories',App\Http\Controllers\Admins\Shop_Categories\ShopCategoryController::class);

    //Shop Categories Product Categories
    Route::prefix('shop_categories_product_categories')->as('shop_categories_product_categories')->group(function () {

    });
    Route::apiResource('shop_categories_product_categories',App\Http\Controllers\Admins\Shop_Categories_Product_Categories\ShopCategoryProductCategoryController::class);

    //Shop Comments
    Route::prefix('shop_comments')->as('shop_comments')->group(function () {

    });
    Route::apiResource('shop_comments',App\Http\Controllers\Admins\Shop_Comments\ShopCommentController::class);

    //Shop Products
    Route::prefix('shop_products')->as('shop_products')->group(function () {

    });
    Route::apiResource('shop_products',App\Http\Controllers\Admins\Shop_Products\ShopProductController::class);

    //Shop Rates
    Route::prefix('shop_rates')->as('shop_rates')->group(function () {

    });
    Route::apiResource('shop_rates',App\Http\Controllers\Admins\Shop_Rates\ShopRateController::class);

    //Shops
    Route::prefix('shops')->as('shops')->group(function () {

    });
    Route::apiResource('shops',App\Http\Controllers\Admins\Shops\ShopController::class);

    //User Shop Favourite
    Route::prefix('user_shop_favourite')->as('user_shop_favourite')->group(function () {

    });
    Route::apiResource('user_shop_favourite',App\Http\Controllers\Admins\User_Shop_favourite\UserShopFavouriteController::class);
});

?>
