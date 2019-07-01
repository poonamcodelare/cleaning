<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\User;
use App\Service;
use App\Order;
use Validator;
Use DB;
use Session;

class CommonController extends Controller
{
    public function dryclining(){
    	return view('pages.dryclining');
    }

     public function store(Request $request)
	    {
	    	Validator::make($request->all(),
	    			[
			'User_Id' => 'required',
			'check_in' => 'required',
			'check_out' => 'required',
			'Service_Id' => 'required',

	    ])->validate();

	    	 $cids=strtotime($request->input('check_in'));
	    	 $newCIdate=date("Y-m-d", $cids);
	    	 $cods=strtotime($request->input('check_out'));
	    	 $newCOdate=date("Y-m-d", $cods);
             
             $new = [
        	    'User_Id' => $request->input('User_Id'),
             	'PickUp_At' => $newCIdate,
             	'Delivery_At' => $newCOdate,
             	'Service_Id' => $request->input('Service_Id'),
             	'Order_Title' => $request->input('Order_Title'),
             	'Order_Types' => $request->input('Order_Types'),
             	'Order_content' => $request->input('Order_content'),
             	'Payments' => $request->input('Payments'),
             	

             ];

         $data = \App\Service::where('id', $new['Service_Id'])->get(['id','service_name','service_price']);
   	
   		 $user = Auth::user();
           return view('pages.checkout',compact('new','data','user'));
      
	    }

    
    
}
