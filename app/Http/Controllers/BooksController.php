<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\category;
use App\Models\details;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{ 

    //untuk menampilkan book list dan mencari booklist berdasarkan kategorinya
    function show(Request $request){
        $paramkategori = $request->get('kategori');
        if($paramkategori === NULL){
            $data = books::all();
        }else{
            $data = books::where('category_id', $paramkategori)->get();
        }

        return view('welcome',['books'=>$data]);
    }  


    // untuk detail dari buku tersebut
    public function detailShow($id)
    {
        $book = books::join('details','books.id','details.book_id')->where('books.id', $id)->first();

        // dd($book);
        $navCategori = category::all();

        return view('detail',[
            "tittle" => $book->tittle,
            "active" => "book",
            'book' => $book,
            'navCat' => $navCategori
        ]);
    }
}
