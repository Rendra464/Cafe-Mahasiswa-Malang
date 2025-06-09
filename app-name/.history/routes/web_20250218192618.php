<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\NonCoffeeController;
use App\Http\Controllers\ModernDrinkController;
use App\Http\Controllers\TraditionalDrinkController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\SnackController;

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

Auth::routes();

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

//kirim rating
Route::post('/Menu-Coffee/{id}/rating', [CoffeeController::class, 'storeRating'])->middleware('auth');
Route::post('/Menu-NonCoffee/{id}/rating', [NonCoffeeController::class, 'storeRating'])->middleware('auth');
Route::post('/Menu-ModernDrink/{id}/rating', [ModernDrinkController::class, 'storeRating'])->middleware('auth');
Route::post('/Menu-TraditionalDrink/{id}/rating', [TraditionalDrinkController::class, 'storeRating'])->middleware('auth');
Route::post('/Menu-Food/{id}/rating', [FoodController::class, 'storeRating'])->middleware('auth');
Route::post('/Menu-Snack/{id}/rating', [SnackController::class, 'storeRating'])->middleware('auth');

//get rating
Route::get('/Menu-Coffee/{coffeeId}/rating', [CoffeeController::class, 'getRating']);
Route::get('/Menu-NonCoffee/{NoncoffeeId}/rating', [NonCoffeeController::class, 'getRating']);
Route::get('/Menu-ModernDrink/{ModernDrinkId}/rating', [ModernDrinkController::class, 'getRating']);
Route::get('/Menu-TraditionalDrink/{TraditionalDrinkId}/rating', [TraditionalDrinkController::class, 'getRating']);
Route::get('/Menu-Food/{FoodId}/rating', [FoodController::class, 'getRating']);
Route::get('/Menu-Snack/{SnackId}/rating', [SnackController::class, 'getRating']);


Route::get('/Menu-Coffee', function () {
    return view('UI/Coffee');
});

Route::get('/Login', function () {
    return view('UI/Login');
});

Route::get('/Menu-NonCoffee', function () {
    return view('UI/NonCoffee');
});

Route::get('/Menu-ModernDrink', function () {
    return view('UI/ModernDrink');
});

Route::get('/Menu-TraditionalDrink', function () {
    return view('UI/TraditionalDrink');
});

Route::get('/Menu-Food', function () {
    return view('UI/Food');
});

Route::get('/Menu-Snack', function () {
    return view('UI/Snack');
});

Route::get('/dbcon', function (){
    return view('dbcon');
});

Route::get('/Shop', function () {
    return view('Shop');
});

Route::get('/Shop', function () {
    return view('Shop');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
