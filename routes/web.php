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
    return view('welcome');
});
//RUTAS PARA EL USUARIO
//desde laravel 8 para llamar a los controller es de la siguiente forma
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Get es para obtener solo la informacion 
//----------"ruta google"-----------------------controllador------------- Metodo del controlador
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');

// POSt es para modificar datos en la bd
//----------"ruta google"---------------controllador-----Metodo del controlador--le damos un nombre
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
//put es para actualizar los datos
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
// delete para eliminar
 Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

 // RUTAS PARA LA PELICULA
 Route::get('/peliculas/create', [App\Http\Controllers\PeliculaController::class, 'create'])->name('peliculas.create');
 Route::post('/peliculas', [App\Http\Controllers\PeliculaController::class, 'store'])->name('peliculas.store');
 Route::get('/peliculas', [App\Http\Controllers\PeliculaController::class, 'index'])->name('peliculas.index');
 Route::get('/peliculas/{pelicula}', [App\Http\Controllers\PeliculaController::class, 'show'])->name('peliculas.show');
 Route::delete('/peliculas/{pelicula}', [App\Http\Controllers\PeliculaController::class, 'destroy'])->name('peliculas.delete');
 Route::get('/peliculas/{pelicula}/edit', [App\Http\Controllers\PeliculaController::class, 'edit'])->name('peliculas.edit');
 Route::put('/peliculas/{pelicula}', [App\Http\Controllers\PeliculaController::class, 'update'])->name('peliculas.update');

 // RUTA PARA EL ALQUILER DE LA PELICULA CRUD
 Route::get('/alquiler/create', [App\Http\Controllers\AlquilerController::class, 'create'])->name('alquilers.create');
 Route::post('/alquiler', [App\Http\Controllers\AlquilerController::class, 'store'])->name('alquilers.store');
 Route::get('/alquiler', [App\Http\Controllers\AlquilerController::class, 'index'])->name('alquilers.index');
 Route::get('/alquiler/{alquiler}/show', [App\Http\Controllers\AlquilerController::class, 'show'])->name('alquilers.show');
 Route::get('/alquiler/{alquiler}/edit', [App\Http\Controllers\AlquilerController::class, 'edit'])->name('alquilers.edit');
 Route::put('/alquiler/{alquiler}', [App\Http\Controllers\AlquilerController::class, 'update'])->name('alquilers.update');
 Route::delete('/alquiler/{alquiler}', [App\Http\Controllers\AlquilerController::class, 'destroy'])->name('alquilers.delete');

 
 Route::get('/encontrarPelicula', [App\Http\Controllers\AlquilerController::class, 'encontrarPelicula']);










