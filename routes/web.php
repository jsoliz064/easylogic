<?php

use App\Http\Controllers\ActividadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\TipotransporteController;
use App\Http\Controllers\TrasporteTipotransporteController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('pais',PaisController::class);
Route::resource('ciudads',CiudadController::class);
Route::resource('agentes',AgenteController::class);
Route::resource('transportes',TransporteController::class);
Route::resource('tipotransportes',TipotransporteController::class);
Route::resource('transportestipotransportes',TrasporteTipotransporteController::class);
Route::resource('actividads',ActividadController::class);

Route::get('importadora', function () {
    return view('importadoras.index');
})->name('importadora.index');

Route::get('agentes/home', function () {
        return view('agentes.indexhome');
})->name('agente.index');

