<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BreweryController;

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

Route::get('/', [HomeController::class, "home"]) ->name ("home");

 Route::get('/about-us', [HomeController::class, "aboutUs"]) ->name("about_us");

 Route::get('/contact', [HomeController::class, "contact"])->name("contact"); 

 Route::get('/where', [HomeController::class, "whereWeAre"])->name("where-we-are"); 

 Route::get('/cervecerias',[BreweryController::class,"cervecerias"])->name("cervecerias");
// detalle de cada cerveceria el indice me dice la posicion de cada una en la array 
 Route::get('/cerveceria/{indice}',[BreweryController::class,"cerveceria"])->name("detalle");

 //rutas form necesitamos una ruta get y otra post

 Route::get('/cerveceria/{indice}',[BreweryController::class,"cerveceria"])->name("detalle");

 Route::post('/cerveceria/{indice}',[BreweryController::class,"cerveceria"])->name("detalle");