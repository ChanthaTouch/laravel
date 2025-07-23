<?php
use Illuminate\Support\Facades\Route;

Route::get('/test', function(){
    return response(['message' => 'API Is working']);
});