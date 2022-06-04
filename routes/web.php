<?php

use App\Http\Controllers\BookController;
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

Route::get('/book/trash', [BookController::class, 'trashedShow'])->name('book.showTrash');
Route::put('/book/{book}/restore', [BookController::class, 'restore'])->name('book.restore')->withTrashed();
Route::delete('/book/{book}/force', [BookController::class, 'forceDelete'])->name('book.force')->withTrashed();

Route::resource('/book', BookController::class);