<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CifraController;
use App\Http\Controllers\PlaylistsHasCifraController;
use App\Http\Controllers\PlaylistController;

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

Route::get('/criarplaylist', function() {
    return view('playlist.criarplaylist');
})->middleware('auth');

Route::get('/config', function() {
    return view('configuracao');
})->middleware('auth');

Route::get('/perfil', function() {
    return view('perfil');
})->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/cifras', [CifraController::class, 'index'])->name('cifras');
Route::get('/playlistesp', [PlaylistsHasCifraController::class, 'index'])->name('playlistesp');
Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists');
