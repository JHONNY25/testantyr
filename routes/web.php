<?php

use App\Http\Controllers\CiudadesController;
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

Route::get('/', [CiudadesController::class,'index'])->name('home');
Route::get('/ciudades', [CiudadesController::class,'getCiudades'])->name('ciudades');
