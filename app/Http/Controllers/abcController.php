<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abcController extends Controller
{
     public function index()
    {
      	echo "kjkjk";
    	exit();
    	return view('pages.gallery');
    }
}
