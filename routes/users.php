<?php
//All Users Routing

//Authenticate
Route::prefix('auth')->as('auth.')->group(function () {
    Route::post('login', [\App\Http\Controllers\Users\Auth\AuthController::class,'login'])->name('login');
});

//Enable User Authentication middleware
Route::group(['middleware' => ['auth:users']], function () {

    //Profile
    Route::prefix('profile')->as('profile.')->group(function () {

        Route::get('',[\App\Http\Controllers\Users\Profile\ProfileController::class,'index'])->name('index');


    });

    //Shops
    Route::apiResource('shops',\App\Http\Controllers\Users\Shops\ShopController::class);

    Route::prefix('shops')->as('shops.')->group(function () {

    });



});
