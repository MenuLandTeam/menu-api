<?php

//All Admins Routing

Route::prefix('auth')->group(function () {

    Route::post('login',[\App\Http\Controllers\Admis\Auth\AuthController::class, 'login'])->name('login');

});

//Enable middleware

Route::middleware('auth:admins')->group(function () {


});

?>
