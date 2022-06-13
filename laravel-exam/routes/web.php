<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;


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

// Route GET : Page d'accueil
Route::get('/', [bookController::class, "index"])->name('index');

// Route GET : Create a new book
Route::get('/create', [bookController::class, "create"])->name('create');

// Route POST : Create a new book
Route::post('/create/store', [bookController::class, "store"])->name('store');

// Route GET : Show the list of books
Route::get('/show-all', [bookController::class, "showAll"])->name('show-all');

// Route GET : Edit a book

Route::get('edit/{id}', [bookController::class, "edit"])->name('book.edit');

// Route DELETE : Delete a book
Route::delete('show/delete/{bookdelete}', [bookController::class, "delete"])->name('delete');

// Route UPDATE : Update a book

Route::put('update/{id}',[bookController::class, "update"])->name('book.update');