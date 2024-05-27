<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Menu-Coffee', function () {
    return view('Coffee');
});

Route::get('/Menu-NonCoffee', function () {
    return view('NonCoffee');
});

Route::get('/ModernDrink', function () {
    return view('ModernDrink');
});

Route::get('/TraditionalDrink', function () {
    return view('TraditionalDrink');
});

Route::get('/Menu-NonCoffee', function () {
    return view('NonCoffee');
});

Route::get('/Menu-NonCoffee', function () {
    return view('NonCoffee');
});

Route::get('/dbcon', function (){
    return view('dbcon');
});
