<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontEndController;

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
Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'home'])->name('admin.home');
Route::group(['prefix' => 'sitio'], function (){
    Route::get('/index', [App\Http\Controllers\FrontEndController::class, 'index'])->name('sitio.index');
    Route::get('/terminos', [App\Http\Controllers\FrontEndController::class, 'terminos'])->name('sitio.terminos');
    Route::get('/condiciones', [App\Http\Controllers\FrontEndController::class, 'condiciones'])->name('sitio.condiciones');
    Route::get('/soporte', [App\Http\Controllers\FrontEndController::class, 'soporte'])->name('sitio.soporte');
    Route::get('/blog', [App\Http\Controllers\PostController::class, 'blog'])->name('sitio.blog');
    Route::get('/articulo/{post}', [App\Http\Controllers\PostController::class, 'articulo'])->name('sitio.articulo');
    Route::get('pages/filtrado/categoria/{category}', [App\Http\Controllers\PostController::class, 'category'])->name('sitio.filtrado.categoria');
    Route::get('pages/filtrado/tag/{tag}', [App\Http\Controllers\PostController::class, 'tag'])->name('sitio.filtrado.tag');
});

