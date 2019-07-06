@extends('layouts.master')

@section('title', "My Order")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')
<!-- order modal -->
<form action="orders" method="post" class="p-3" autocomplete="off">
@csrf
	<div class="container-fluid">
	  <div class="row">
	  	@if($errors->any())
		@foreach($errors->all() as $errors)
				<div class="alert alert-info">{{$errors}}</div>	
			@endforeach
		@endif

		  @if(Session::has('success'))
	    <div class="alert alert-info">
	       {{Session::get('success')}}
	    </div>
	   @endif 

	    <input type="hidden" class="form-control" name="User_Id" id="name" value="">

	      <input type="hidden" class="form-control" name="Order_Title" id="Order_Title" value="">

	      <input type="hidden" class="form-control" name="Order_Types" id="Order_Types">

	      <input type="hidden" class="form-control" name="Order_content" id="Order_content" placeholder="Order Content">

	      <input type="hidden" class="form-control" name="Payments" id="Payments">
<!-- City -->
			<div class="col-sm-2">  
				<div class="facilities-city">  
				<span class="label">Select City</span>
                 <select name="City_Id" id="city"  class="form-control">
            	   <option value="">Select City</option>
            	    @foreach($city as $city)                               
	            	<option value="{{$city->id}}">{{$city->name}}</option>
	                @endforeach
                 </select>
                </div>
		  </div>
<!-- Service -->
		    <div class="col-sm-2">
		    	<div class="facilities">
		    		<span class="label">Select Service</span>
				    <span class="input">
				        <select name="Service_Id[]" id="service" class="selectpicker" multiple data-live-search="true">
				          <option value="">Select Service</option>
			               @foreach($service as $service)                               
			            	<option value="{{$service->id}}">{{$service->service_name}}</option>
			               @endforeach
				        </select>
				    </span>
			   </div>
		    </div>


		    <div class="col-sm-2">
	            <div class="facilities-cat" style="margin:0px;">
		    		<span class="label">Select Category</span>
				    <span class="input">
				        <select name="Category_Id[]" id="category" class="selectpicker" multiple data-live-search="true">
				           <option value="">Select Category</option>
			               @foreach($category as $category)                               
			               <option value="{{$category->id}}">{{$category->category_name}}</option>
			              @endforeach
				        </select>
				    </span>
			   </div>
		    </div>

		    <div class="col-sm-2">
		    	<div class="facilities-date">
			    	<span>PickDate</span>
		            <input id="dt1" name="check_in" type="text" class="form-control">
	           </div>
		    </div>
		    <div class="col-sm-2">
		    	<div class="facilities-date">
			    	<span>DropDate</span>
		      		<input id="dt2" name="check_out" type="text" class="form-control">
		      	</div>
		    </div>

		    <div class="col-sm-2">
		    	<div class="facilities-h">
		    		<p></p>
		    	   <input type="submit" name="submit" class="form-control btn btn-success" value="Order" style="background-color: #4ea453;padding: 0px;">
		    	</div>
		    </div>

	    
	  </div>
   </div>
 </form>
	@endsection