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

Route::get('admin',                     [LoginController::class, 'index'])->name('admin.index');
Route::post('admin/login',              [LoginController::class, 'login'])->name('admin.login');
Route::get('admin/logout',              [LoginController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function(){
    
    Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    

    Route::resource('usuarios', 		UserController::class)->only(['index', 'create', 'edit', 'store', 'destroy']);
    Route::resource('categorias',		CategoriaController::class)->only(['index', 'create', 'edit', 'store', 'destroy']);
    Route::resource('comentarios', 		ComentarioController::class)->only(['index', 'create', 'edit', 'store', 'destroy']);
    Route::resource('juegos', 		    JuegoController::class)->only(['index', 'create', 'edit', 'store', 'destroy']);
   

});


Route::get('/', function () {
    return view('index');
});

