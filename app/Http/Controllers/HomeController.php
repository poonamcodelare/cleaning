<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $banner = DB::table('banners')->get();
        $categories = DB::table('categories')->get();
        $service = DB::table('services')->get();
        $package = DB::table('packages')->get();
        $testimonial = DB::table('testimonials')->get();
        return view('pages.index',compact('categories','service','package','testimonial', 'banner'));
    }

    public function service($id)
    {
        // $services = DB::table('services')->where('id','category_id','service_image');
        // return view('pages.ServiceByCategory',compact('services'));


        $services = Service::where("category_id", $id)->get();
        return view('pages.ServiceByCategory', compact('services'));
        // $data = \App\Maintable::get(['id','name','country_id','state_id','city_id']);
        // return view("fetch",compact('data'));
    }

    public function gallery(){
        $gallery = DB::table('galleries')->get();
        return view('pages.gallery', compact('gallery'));
    }


}
