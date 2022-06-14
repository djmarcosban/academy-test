<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title',
            'author',
            'release'
        ]);

        $books = new Books;
        $books->title = $request->title;
        $books->author = $request->author;
        $books->release = $request->release;

        if($books->save()){

            return redirect()->route('list');
        }
    }

    public function list()
    {
        $books = Books::get();
        return view('list')->with(['books' => $books]);
    }
}
