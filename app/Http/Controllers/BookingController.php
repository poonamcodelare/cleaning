<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookServiceValidation;

class BookingController extends Controller
{
    
    public function index(BookServiceValidation $request){
        $data = $request->all();
        
        return view('pages.booking',compact('data'));
    }

    public function create(Request $request){
       

    }
}
