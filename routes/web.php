<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/add-customer', [CustomerController::class, 'addCustomer']);
Route::get('/get-all-customer', [CustomerController::class, 'allCustomer']);
Route::get('/get-one-customer/{id}', [CustomerController::class, 'getOneCustomer']);

