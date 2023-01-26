<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleMang;
use App\Http\Controllers\Article_articleC;
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
    return view('welcome');
});

Route::get('/products',[ArticleMang::class,'index']);
Route::get('/index',[ArticleMang::class,'getProduct']);
