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

Route::get('/admin{any}', function () {
    return view('admin.index');
})->where('any', '.*')->middleware([ "role:admin"]);

Route::get('/{any}', function () {
    return view('landing.index');
})->where('any', '.*');

Route::get("admin/login",function() {
    return "login page";
})->name("login");
