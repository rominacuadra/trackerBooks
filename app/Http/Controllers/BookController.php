<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller {
    public function index(string $status): View {
        $books = Book::where('status', $status)->get();
        return view('books.index', compact('books'));
    }
}
