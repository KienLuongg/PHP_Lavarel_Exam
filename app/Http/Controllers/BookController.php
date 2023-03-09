<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list(Request $request){
        $search = $request->get("search");
        $authorid = $request->get("authorid");
        $title = $request->get("title");
        $pub_year = $request->get("pub_year");

        $data = Book::all()->AuthorFilter($authorid)->TitleFilter($title)->Pub_yearFilter($pub_year)->Search($search)->orderBy("id","desc")->paginate(20);

        return view("book.list",compact("data"));
    }
}
