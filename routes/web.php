<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

Route::get('/', [AnimalController::class, 'index'])->name('home');
Route::get('/create', [AnimalController::class, 'create']);
Route::post('/store', [AnimalController::class, 'store'])->name('store');
Route::post('/delete', [AnimalController::class, 'delete'])->name('delete');
Route::get('/{animal}', [AnimalController::class, 'info']);
