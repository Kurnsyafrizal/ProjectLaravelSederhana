<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\details;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    function detailBooks(){

        $dtData = details::all();
        return view('detail',['details'=>$dtData]);
    }

    public function show(books $books){
        
        $books_detail = $books;
        return view('detail', compact('books_detail'));

    }
}
