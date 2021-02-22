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
    return view('pages.welcome',);
});

Route::get('prodotti', function () {
    $data = json_decode( config('db.data'), true );
    return view('pages.prodotti' , compact("data"));
});

Route::get('contatti', function () {
    return view('pages.contatti');
});
