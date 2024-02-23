<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Language;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $genres = Genre::all();
        $languages = Language::all();

        return view('book', compact('genres','languages'));
    }

    public function store() {
        // Store the book in the database
        $book = new Book;

        $book->title = request('title');
        $book->author = request('author');
        $book->description = request('description');
        $book->publisher = request('publisher');
        $book->publish_year = request('publish_year');
        $book->ibsn = request('ibsn');
        $book->genre = request('genre');
        $book->language = request('language');
        $book->page_count = request('page_count');
        $book->price = request('price');

        $book->save();

        return redirect()->route('display');
    }

    public function display() {
        $books = Book::all();

        return view('display', compact('books'));
    }
}