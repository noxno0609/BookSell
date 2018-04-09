<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyword=null;
        $books = Book::paginate(9);
        return view('home', compact('books', 'keyword'));
    }

    public function detail($id)
    {
        $book = Book::find($id);
        return view('book', compact('book'));
    }

    public function search()
    {
        $keyword = Input::get('search');

        $books = Book::where('title', 'LIKE', '%'.$keyword.'%')->paginate(9);
        return view('home', compact('books', 'keyword'));
    }
}
