<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticelController;
use Ap\Model\Artikel;

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

Route::get('/add', function () {
    return view('add');
});
Route::get('/', [ArticelController::class, 'show'])->name('get');
Route::post('/add_user', [ArticelController::class, 'add_process'])->name('add');
Route::get('/detail/{id}', [ArticelController::class, 'detail'])->name('detail');
Route::get('/admin', [ArticelController::class, 'show_by_admin'])->name('show_by_admin');
Route::get('/edit/{id}',[ArticelController::class, 'edit'])->name('edit');
Route::post('/edit_process',[ArticelController::class, 'edit_process'])->name('edit');
Route::get('/delete/{id}', [ArticelController::class, 'delete'])->name('delete');
// Route::post('/add_process', 'ArticelController@add_process')->name('add');
// Route::get('/detail/{id}', 'ArticelController@detail');
// Route::get('/add_process',[ArticelController::class, 'add_process']);
// Route::post('/add_process', 'ArtikelController@add_process');
// Route::post('/add_process',  [ArticelController::class, 'add_process']);
// Route::get('/detail/{id}', 'ArticelController@detail');
// Route::get('/admin', 'ArtikelController@showbyadmin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
