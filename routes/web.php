<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::resource("book",BookController::class);
Route::redirect('/', '/book');