<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(2);
        return view('main', compact('books'));
    }

    /**
     * Display Trashed item
     * 
     * @return \Illuminate\Http\Response
     */

    public function trashedShow()
    {
        $books = Book::onlyTrashed()->paginate(2);
        return view('trashed', compact('books'));
    }

    /**
     * Trash a Book
     * 
     * @param \app\Models\Book $book
     * @return \Illuminate\Http\Response
     */

    public function forceDelete(Book $book)
    {
        $book->forceDelete();
        return redirect()->route('book.showTrash');
    }

    /**
     * Restore a Book
     * 
     * @param \app\Models\Book $book
     * @return \Illuminate\Http\Response
     */

    public function restore(Book $book)
    {
        $book->restore();
        return redirect()->route('book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/book');
    }
}
