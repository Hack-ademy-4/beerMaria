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

 //rutas formulario necesitamos una ruta get y otra post
 Route::get('/contact', [HomeController::class, "contact"])->name("contact");
/*  Route::view('/contact','contact',)->name("contact"); */
 Route::post('/contact',[HomeController::class,"newContact"])->name("contact_new");

//rutas donde estamos
 Route::get('/where', [HomeController::class, "whereWeAre"])->name("where_we_are"); 
 Route::view('/where','where_we_are',)->name("where_we_are");

 //ruta para lista de contactos
/*  Route::get('/contacs', [HomeController::class, "contacts"])->name("contacts");  */


 Route::get('/cervecerias',[BreweryController::class,"cervecerias"])->name("cervecerias");
// detalle de cada cerveceria el indice me dice la posicion de cada una en la array 
 Route::get('/cerveceria/{indice}',[BreweryController::class,"cerveceria"])->name("detalle");


 //detalle de una cerveceria
Route::get('/cervecerias/{id}',[BreweryController::class,'show'])->name("cervecerias.show");
 
//todas las cervecerias
Route::get('/cervecerias',[BreweryController::class,'index'])->name("cervecerias.todas");

//crear nueva cerveceria
Route::get('/cerveceria-new',[BreweryController::class,"create"])->name("cervecerias.new");

Route::post('/cervecerias',[BreweryController::class,"store"])->name("cervecerias.store");

//editar una cerveceria
Route::get('/cerveceria/{id}/edit',[BreweryController::class,"edit"])->name("cervecerias.edit");

Route::put('/cervecerias{id}',[BreweryController::class,"update"])->name("cervecerias.update");