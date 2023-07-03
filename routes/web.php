<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchBooks;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/book-search', function () {
        return view('search-books');
    })->name('book.search');

    Route::post('/book-search', [SearchBooks::class, 'search'])->name('book.search.submit');
});

