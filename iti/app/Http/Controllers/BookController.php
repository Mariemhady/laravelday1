<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function booksindex(){
        $books = [
                "b1"=> ["title"=> "book1", "body"=> "body1"],
                "b2"=> ["title"=> "book2", "body"=> "body2"],
                "b3"=> ["title"=> "book3", "body"=> "body3"],
        ];
        return view('iti.books', ["data"=> $books]);

    }

    public function show($bookid){
        $books = [
                "b1"=> ["title"=> "book1", "body"=> "body1"],
                "b2"=> ["title"=> "book2", "body"=> "body2"],
                "b3"=> ["title"=> "book3", "body"=> "body3"],
        ];
        if(array_key_exists($bookid, $books)){
            return view('iti.showbook', ["data"=> $books[$bookid]]);
        }else{
            abort(404);
            // return redirect("/books");
        }
    }

    public function __invoke()
    {
        echo "hello world";
    }

    


}
