<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/add-customer', [CustomerController::class, 'addCustomer']);
Route::get('/get-all-customer', [CustomerController::class, 'allCustomer']);
Route::get('/get-one-customer/{id}', [CustomerController::class, 'getOneCustomer']);


Route::get('/get-all-products',[ProductController::class,'getAllProducts']);
Route::get('/get-one-product/{id}',[ProductController::class,'getOneProduct']);
// Route::post('/add-product',[ProductController::class,'addProduct']);
