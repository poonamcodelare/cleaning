<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\User;
use App\Service;
use App\Category;
use App\Location;
use App\Order;
use Validator;
Use DB;
use Session;

class CommonController extends Controller
{
    public function dryclining(){
    	return view('pages.dryclining');
    }

    public function new(Request $request){

   
         $cids=strtotime($request->input('pickdate'));
         $newCIdate=date("Y-m-d", $cids);
         $cods=strtotime($request->input('dropdate'));
         $newCOdate=date("Y-m-d", $cods);

         $a=$request->input('check_in');
         $b=$request->input('check_out');
             
             $new = [
              'User_Id' => $request->input('User_Id'),
              'Service_Id' => $request->input('Service_Id'),
              'City_Id' => $request->input('City_Id'),
              'pickupdate' => $newCIdate,
              'deliverydate' => $newCOdate,
              'Order_Title' => $request->input('Order_Title'),
              'Order_Types' => $request->input('Order_Types'),
              'Order_content' => $request->input('Order_content'),
              'Payments' => $request->input('Payments'),
            
             ];

            $ghs = $request->input('Service_Id');

          
           $data = \App\Service::where('id', $new['Service_Id'])->get(['id','service_name','service_price']);

          $city = \App\location::where('id', $new['City_Id'])->get(['id','name']);

          $user = Auth::user();

           return view('pages.checkout', compact('new','data','user','city','abc','ghs','a','b'));



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
             	// 'PickUp_At' => $newCIdate,
             	// 'Delivery_At' => $newCOdate,
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
           return view('pages.checkout',compact('new','data','user','city', 'abc'));
      
	    }
    
}
