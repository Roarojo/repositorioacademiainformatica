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
use App\Http\Controllers\MostrarUsuariosController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\RolController;

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

Route::post('/logout',[LogoutContoller::class,'cerrarsecion'])->name('logout');

Route::delete('/eliminar/{user}',[OtraVentanaContoller::class,'eliminar'])->name('post.delete');

Route::get('/login',[LoginContoller::class,'mostrarLogin'])->name('login');

Route::post('/editar-cuenta/{user}',[OtraVentanaContoller::class,'editar'])->name('post.edit');

Route::get('/editar-usuario/{user}',[ModificarController::class,'mostrar'])->name('post.editar');

Route::post('/modificar-usuario/{user}',[ModificarController::class,'modificar'])->name('modificar-cuenta');

Route::post('/mostrar-usuarios',[MostrarUsuariosController::class,'mostrar'])->name('mostrar.usuarios');

Route::get('/mostrar-usuarios',[MostrarUsuariosController::class,'vincular'])->name('mostrar.usuarios');

Route::post('/modificar-rol/{user}',[RolController::class,'edit'])->name('post.rol');

//profesor

Route::get('/mostrar-profesor',[ProfessorController::class,'show'])->name('mostrar.profesor');

Route::post('/mostrar-profesor',[ProfessorController::class,'store'])->name('agregar-profesor');

Route::post('/mostrar-profesor/{prof}',[ProfessorController::class,'destroy'])->name('profesor.delete');


Route::post('/modificar-profesor/{prof}',[ProfessorController::class,'edit'])->name('mod.profesor');

Route::post('/aplicar-profesor/{prof}',[ProfessorController::class,'update'])->name('aplicar.mod');

