<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('console', App\Http\Controllers\ConsoleController::class)
->except(['show'])
->middleware('auth');

Route::resource('game', App\Http\Controllers\GameController::class)
->middleware('auth')
->except(['show']);

Route::resource('metadata', App\Http\Controllers\MetadataController::class)
->middleware('auth')
->except(['show']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
