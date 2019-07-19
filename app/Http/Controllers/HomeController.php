<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use DB;
use App\Location;
use App\Service;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $visitors=DB::table('visitors')->where('Page_Id', 1)->increment('Visit_Count',1);
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::user();
        $city = DB::table('locations')->get();
        $banner = DB::table('banners')->get();
        // $categories = DB::table('categories')->get();
        $service = DB::table('services')->get();
        $package = DB::table('packages')->get();
        $testimonial = DB::table('testimonials')->get();
        return view('pages.index',compact('service','package','testimonial', 'banner','city','user'));
    }


    public function gallery(){
        $gallery = DB::table('galleries')->get();
        return view('pages.gallery', compact('gallery'));
    }

     public function store(Request $request)
        {
        // echo "<pre>";
        // print_r($_POST);
        // exit();

            Validator::make($request->all(),
                    [
            // 'User_Id' => 'required',
            // 'check_in' => 'required',
            // 'check_out' => 'required',
            'Service_Id' => 'required',
            'City_Id' => 'required',
      // 'Category_Id' => 'required',

        ])->validate();

             $cids=strtotime($request->input('check_in'));
             $newCIdate=date("Y-m-d", $cids);
             $cods=strtotime($request->input('check_out'));
             $newCOdate=date("Y-m-d", $cods);
             
             $new = [
                // 'User_Id' => $request->input('User_Id'),
                 'PickUp_At' => $newCIdate,
                 'Delivery_At' => $newCOdate,
                 'Service_Id' => $request->input('Service_Id'),
                 'City_Id' => $request->input('City_Id'),
                //'Category_Id' => $request->input('Category_Id'),
                'Order_Title' => $request->input('Order_Title'),
                'Order_Types' => $request->input('Order_Types'),
                'Order_content' => $request->input('Order_content'),
                'Payments' => $request->input('Payments'),
            
             ];


          // foreach($new['Category_Id'] as $key => $value){
          //    $obj = \App\Category::where('id', $value)->get(['id','category_name'])->toArray();
          //    $cats[] = $obj;
          // }           
           
          foreach ($new['Service_Id'] as $key => $value) {

            $object =  \App\Service::where('id', $value)->get();
            $abc[] = $object;

          }

         $data = \App\Service::where('id', $new['Service_Id'])->get(['id','service_name','service_price']);

          $city = $request->input('City_Id');

         // $category = \App\Category::where('id', $new['Category_Id'])->get(['id','category_name']);
    
            $user = Auth::user();
           return view('pages.order_recevied',compact('new','data','user','city', 'abc'));
      
        }



        public function show(Request $request)
        {

            Validator::make($request->all(),
                    [
            // 'User_Id' => 'required',
            // 'check_in' => 'required',
            // 'check_out' => 'required',
            'Service_Id' => 'required',
            'City_Id' => 'required',
            // 'Category_Id' => 'required',

        ])->validate();

             $cids=strtotime($request->input('check_in'));
             $newCIdate=date("Y-m-d", $cids);
             $cods=strtotime($request->input('check_out'));
             $newCOdate=date("Y-m-d", $cods);
             
             $new = [
                // 'User_Id' => $request->input('User_Id'),
                 'PickUp_At' => $newCIdate,
                 'Delivery_At' => $newCOdate,
                 'Service_Id' => $request->input('Service_Id'),
                 'City_Id' => $request->input('City_Id'),
                //'Category_Id' => $request->input('Category_Id'),
                'Order_Title' => $request->input('Order_Title'),
                'Order_Types' => $request->input('Order_Types'),
                'Order_content' => $request->input('Order_content'),
                'Payments' => $request->input('Payments'),
            
             ];


          // foreach($new['Category_Id'] as $key => $value){
          //    $obj = \App\Category::where('id', $value)->get(['id','category_name'])->toArray();
          //    $cats[] = $obj;
          // }           
           
          foreach ($new['Service_Id'] as $key => $value) {

            $object =  \App\Service::where('id', $value)->get();
            $abc[] = $object;

          }

         $data = \App\Service::where('id', $new['Service_Id'])->get(['id','service_name','service_price']);

          $city = \App\location::where('id', $new['City_Id'])->get(['id','name']);

         // $category = \App\Category::where('id', $new['Category_Id'])->get(['id','category_name']);
    
            $user = Auth::user();
           return view('pages.order_recevied',compact('new','data','user','city', 'abc'));
      
        }




}
