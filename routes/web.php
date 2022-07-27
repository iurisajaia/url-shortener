<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RoutesController;
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

Route::get('/', [RoutesController::class , 'index'])->name('index');
Route::post('/shorten', [RoutesController::class , 'shorten'])->name('shorten');
Route::get('/{id}', [RoutesController::class , 'redirectToUrl'])->name('redirect');
