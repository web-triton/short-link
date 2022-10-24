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

Route::get('/', [App\Http\Controllers\Front\IndexController::class, 'index'])->name('home');
Route::post('/', [App\Http\Controllers\Front\CreateController::class, 'create'])->name('create');
Route::get('/{code}', [App\Http\Controllers\Front\CodeController::class, 'code'])->name('code');
