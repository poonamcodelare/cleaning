<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BookServiceValidation;
//use App\Service;
//use App\Location;
use DB;
class BookingController extends Controller
{
    
    public function index(BookServiceValidation $request){
        $data = $request->all();
        
        return view('pages.booking',compact('data'));
    }

// $data= DB::table()->get()


   
    // public function index(BookServiceValidation $request)
    //  {
    //  	// $services = new Service;
    //  	// $services = \App\Service::get(['id','service_name']);
    //  	// $locations = \App\Location::get(['id','name']);

    //  	$services = DB::table('services')->get();
    //  	$locations = DB::table('locations')->get();

    //  	return view("pages.booking",compact('services','locations'));
    //  }
}
