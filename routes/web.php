<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',['index'=>'index']);
});
//User Pages

    Route::get('/Services',[App\Http\Controllers\ServicesController::class,'index']);
    Route::get('/pricing',[App\Http\Controllers\PricingController::class,'index']);
    Route::get('/portfolio',[App\Http\Controllers\PortfolioController::class,'index']);
    Route::get('/about',[App\Http\Controllers\AboutController::class,'index']);
    Route::get('/contact',[App\Http\Controllers\ContactController::class,'index']);
    Route::post('/contact',[App\Http\Controllers\ContactController::class,'store']);
    Route::get('/FAQ',[App\Http\Controllers\FAQController::class,'index']);
    Route::get('/{name}',[App\Http\Controllers\ViewProjectController::class,'index']);

