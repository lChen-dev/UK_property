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
    return view('home');
});
Route::get('list', function () {
    return view('list');
});
Route::post('list', function () {
    return view('list');
});
Route::get('list_map', function() {
    return view('list_map');
});

Route::get('detail', function() {
    return view('detail');
});
