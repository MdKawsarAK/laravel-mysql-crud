<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/products', ProductController::class);
Route::resource('/posts', PostController::class);
Route::resource('/companies', CompanyController::class);
Route::resource('/suppliers', SupplierController::class);
Route::resource('/doctors', DoctorController::class);
Route::resource('/services', ServiceController::class);