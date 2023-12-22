<?php

use App\Http\Controllers\PagesController;
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


Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/admin', [PagesController::class, 'show'])->name('show');
Route::get('/create', [PagesController::class, 'create'])->name('create');
Route::post('/store', [PagesController::class, 'store'])->name('store');
Route::get('/{page}/edit  ', [PagesController::class, 'edit'])->name('edit');
Route::put('/{page}', [PagesController::class, 'update'])->name('update');
Route::delete('/{page}', [PagesController::class, 'destroy'])->name('delete');

