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
    return view('sitio.pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'sitio'], function (){
    Route::get('/index', [App\Http\Controllers\FrontEndController::class, 'index'])->name('sitio.index');
    Route::get('/terminos', [App\Http\Controllers\FrontEndController::class, 'terminos'])->name('sitio.terminos');
    Route::get('/condiciones', [App\Http\Controllers\FrontEndController::class, 'condiciones'])->name('sitio.condiciones');
    Route::get('/soporte', [App\Http\Controllers\FrontEndController::class, 'soporte'])->name('sitio.soporte');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
