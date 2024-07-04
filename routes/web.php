<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use Ap\Model\Artikel;
use App\Http\Controllers\ArticelController;

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
Route::get('/', 'ArtikelController@show');
Route::post('/add_process', 'ArtikelController@add_process');
Route::get('/detail/{id}', 'ArtikelController@detail');
// Route::get('/add_process',[ArticelController::class, 'add_process']);
// Route::post('/add_process', 'ArtikelController@add_process');
// Route::post('/add_process',  [ArticelController::class, 'add_process']);
// Route::get('/detail/{id}', 'ArticelController@detail');
// Route::get('/admin', 'ArtikelController@showbyadmin');