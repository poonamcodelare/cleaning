<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Service;
use App\Order;
use Validator;
Use DB;
class OrderController extends Controller
{
     public function index(){
      $service=Service::all();
      $user = Auth::user();
      return view('pages.order',compact('user', 'service'));
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
             	'pickdate' => $newCIdate,
             	'dropdate' => $newCOdate,
             	'Service_Id' => $request->input('Service_Id'),
             	'Order_Title' => $request->input('Order_Title'),
             	'Order_Types' => $request->input('Order_Types'),
             	'Order_content' => $request->input('Order_content'),
             	'Payments' => $request->input('Payments'),
             	

             ];      
             DB::table('orders')->insert($new);

	        return redirect('/orders');
	        // ->with('success', 'Ordered Successfully');

	        // return back()->with('success','Item created successfully!');

	        // return redirect()->route('/orders')
	        // 	->with('success', 'Ordered Successfully');


	    }



}
