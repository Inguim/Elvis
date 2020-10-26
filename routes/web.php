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

Route::get('/cifras', function() {
    return view('cifras.cifras');
})->middleware('auth');

Route::get('/playlistesp', function() {
    return view('playlist.playlistespecifica');
})->middleware('auth');

Route::get('/playlists', function() {
    return view('playlist.playlists');
})->middleware('auth');

Route::get('/criarplaylist', function() {
    return view('playlist.criarplaylist');

})->middleware('auth');

Route::get('/config', function() {
    return view('configuracao');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
