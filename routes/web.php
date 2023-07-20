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
    return view('/public/trangchu');
});


Route::get('/public/out','out@index');
Route::post('/public/check','checkLogin@index');
Route::get('/public/admin','checkSession@index');
Route::get('/public/dauportal', function () {
    return view('/public/dauportal');
});
Route::get('/public/thongtincanhan', function () {
    return view('/public/thongtincanhan');
});
Route::get('/public/diem', function () {
    return view('/public/diem');
});
Route::get('/public/login', function () {
    return view('/public/login');
});
