<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


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



Route::get('/index','App\Http\Controllers\CrudController@stor')->middleware('auth');


use Illuminate\Http\Request;
Route::any('/form', function(Request $resquest){
    $name = $resquest->Input('name');
    return $name;

});


