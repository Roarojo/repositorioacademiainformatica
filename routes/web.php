<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidarContoller;
use App\Http\Controllers\OtraVentanaContoller;
use App\Http\Controllers\CrearCuentaContoller;
use App\Http\Controllers\LoginContoller;
use App\Http\Controllers\LogoutContoller;
use App\Http\Controllers\ModificarController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\ModificarCuentaController;


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
    return view('ejemplo');
})->name('index');

Route::post('/', [ValidarContoller::class,'obtenerDatos'])->name('index');
Route::get('acceso',[OtraVentanaContoller::class,'vincular'])->name('post.index');

Route::get('crear',[CrearCuentaContoller::class,'mostrarDatos'])->name('crear-cuenta');
Route::post('crear',[CrearCuentaContoller::class,'crearDatos'])->name('crear-cuenta');

Route::get('/login',[LoginContoller::class,'mostrarLogin'])->name('login');


Route::post('/logout', [LogoutContoller::class, 'cerrarSesion'])->name('logout');


Route::delete('/eliminar/{user}',[OtraVentanaContoller::class,'eliminar'])->name('post.destroy');


Route::post('/modificar/{user}',[ModificarController::class,'modificar'])->name('post.modificar');
Route::get('/modal/{user}',[ModalController::class,'vincular'])->name('post.modal');

Route::post('/modificar-cuenta/{user}',[ModificarCuentaController::class,'modificar'])->name('modificar-cuenta');