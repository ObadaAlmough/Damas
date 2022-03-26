<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\dashboard\orderController;
use App\Http\Controllers\dashboard\clientController;
use App\Http\Controllers\dashboard\productController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => '/dashboard'], function () {

        Route::get('user/', [userController::class, 'index'])->middleware(['permission:read_users']);
        Route::get('user/create', [userController::class, 'create'])->middleware(['permission:create_users']);
        Route::post('user/store', [userController::class, 'store'])->middleware(['permission:create_users']);
        Route::get('user/edit/{user}', [userController::class, 'edit'])->middleware(['permission:update_users']);
        Route::post('user/update/{user}', [userController::class, 'update'])->middleware(['permission:update_users']);
        Route::get('user/delete/{user}', [userController::class, 'delete'])->middleware(['permission:delete_users']);
        //users

        Route::get('product/', [productController::class, 'index'])->middleware(['permission:read_products']);
        Route::get('product/create', [productController::class, 'create'])->middleware(['permission:create_products']);
        Route::post('product/store', [productController::class, 'store'])->middleware(['permission:create_products']);
        Route::get('product/edit/{product}', [productController::class, 'edit'])->middleware(['permission:update_products']);
        Route::post('product/update/{product}', [productController::class, 'update'])->middleware(['permission:update_products']);
        Route::get('product/delete/{product}', [productController::class, 'delete'])->middleware(['permission:delete_products']);
        //products

        Route::get('client/', [clientController::class, 'index'])->middleware(['permission:read_clients']);
        Route::get('client/create', [clientController::class, 'create'])->middleware(['permission:create_clients']);
        Route::post('client/store', [clientController::class, 'store'])->middleware(['permission:create_clients']);
        Route::get('client/edit/{client}', [clientController::class, 'edit'])->middleware(['permission:update_clients']);
        Route::post('client/update/{client}', [clientController::class, 'update'])->middleware(['permission:update_clients']);
        Route::get('client/delete/{client}', [clientController::class, 'delete'])->middleware(['permission:delete_clients']);
        //clients

        Route::get('order/', [orderController::class, 'index'])->middleware(['permission:read_orders']);
        Route::get('order/{client}/{order}', [orderController::class, 'products'])->middleware(['permission:read_orders']);//show product
        Route::get('order/create/{client}/{order}', [orderController::class, 'create'])->middleware(['permission:create_orders']);
        Route::get('add-order/create', [orderController::class, 'addOrder'])->middleware(['permission:create_orders']);//add order
        Route::post('order/store', [orderController::class, 'store'])->middleware(['permission:create_orders']);
        Route::get('order/edit/{client}/{order}', [orderController::class, 'edit'])->middleware(['permission:update_orders']);
        Route::post('order/update/{order}', [orderController::class, 'update'])->middleware(['permission:update_orders']);
        Route::get('order/delete/{order}', [orderController::class, 'delete'])->middleware(['permission:delete_orders']);
        //orders


    });

});
