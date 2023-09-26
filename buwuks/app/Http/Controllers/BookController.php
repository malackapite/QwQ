<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   public function index(){
        return response()->json(Book::all());
    }

    public function show($id){
        return response()->json(Book::find($id));
    }
    
    public function delete($id){
        return Book::find($id)->delete();
    }

    public function store(Request $request){
        $book=new Book();
        $book->author=$request->author;
        $book->title=$request->title;
        $book->pieces=$request->pieces;  
        $book->save(); 
    }

    public function update(Request $request, $id){
        $book=Book::find($id);
        $book->author=$request->author;
        $book->title=$request->title;
        $book->pieces=$request->pieces;  
        $book->save(); 
    }

    public function newView(){
        return view("book.new");
    }

    public function editView(){
        return view("book.edit", ["books" => Book::all()]);
    }

    public function listView(){
        return view("book.list", ["books" => Book::all()]);
    }
}
