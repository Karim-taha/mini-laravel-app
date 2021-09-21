<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showAllBooks(){
        $books = [
            "b1" => ["title"=>"book1", "author"=>"karim"],
            "b2" => ["title"=>"book2", "author"=>"omar"],
            "b3" => ["title"=>"book3", "author"=>"a7md"]
        ];
        return view('iti.books', ["books"=>$books]);
    }

    public function __invoke()
    {
        abort(404);
    }
}
