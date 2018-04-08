<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Input;
use Storage;
use Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(!Auth::user()->isAdmin())
        {
            return redirect('home');
        }

        $books = Book::paginate(5);
        return view('admin.index', compact('books'));
    }

    public function create()
    {
        if(!Auth::user()->isAdmin())
        {
            return redirect('home');
        }

        return view('admin.create');
    }
    
    public function store()
    {
        if(!Auth::user()->isAdmin())
        {
            return redirect('home');
        }

        $book = new Book;
        $book->title = Input::get('title');
        $book->description = Input::get('description');
        $book->author = Input::get('author');
        $book->producer = Input::get('producer');
        $book->price = Input::get('price');
        $book->createduserid = Auth::user()->id;
        $book->save();

        if (Input::hasFile('bookimage'))
        {
            $file = Input::file('bookimage');

            $filename = $book->id.'.jpg';

            $file->move('uploads',$filename);
            $book->imagename = $filename;
            $book->save();
        }

        return redirect('admin');
    }

    public function edit($id)
    {
        if(!Auth::user()->isAdmin())
        {
            return redirect('home');
        }

        $book = Book::find($id);
        return view('admin.edit', compact('book'));
    }

    public function show($id)
    {
        if(!Auth::user()->isAdmin())
        {
            return redirect('home');
        }

        $btSave = Input::get('btnSave');
        if (isset($btSave))
        {
            $book = Book::find($id);
            $book->update(Input::all());
        }
        return redirect('admin');
    }

    public function destroy($id)
    {
        if(!Auth::user()->isAdmin())
        {
            return redirect('home');
        }

        $book = Book::find($id);
        $book->delete();
        return redirect('admin');
    }

    public function fileupload($id)
    {
        if(!Auth::user()->isAdmin())
        {
            return redirect('home');
        }

        if (Input::hasFile('bookimage'))
        {
            $book = Book::find($id);
            $file = Input::file('bookimage');

            $filename = $book->id.'.jpg';

            $file->move('uploads',$filename);
            $book->imagename = $filename;

            $book->save();

            return redirect()->route('admin.edit', $id);
        }
    }
}
