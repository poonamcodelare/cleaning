@extends('layouts.master')

@section('title', "My Order")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')
<!-- order modal -->
	<div>
	  
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize" id="exampleModalLabel1">order your laundry</h5>
			
				</div>
				<div class="modal-body">
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
					<form action="orders" method="post" class="p-3" autocomplete="off">
						@csrf
						<div class="form-group">
						<!-- 	@isset($user->id) -->
							<input type="hidden" class="form-control" name="User_Id" id="name" value="{{$user->id}}">
						<!-- 	@endisset -->
						</div>
						<div class="form-group">
							<input type="hidden" class="form-control" name="Order_Title" id="Order_Title" value="test_title">
						</div>
						<div class="form-group">
							<input type="hidden" class="form-control" name="Order_Types" id="Order_Types">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="Order_content" id="Order_content" placeholder="Order Content">
						</div>
						<div class="form-group">
							<input type="hidden" class="form-control" name="Payments" id="Payments">
						</div>

						<div class="form-group">
							<label class="mr-2 col-form-label">Pick Up</label>
							<input id="dt1" name="check_in" type="text" class="form-control" placeholder="PickDate">
						</div>
						<div class="form-group">
							<label class="mr-2 col-form-label">Delivery</label>
							<input id="dt2" name="check_out" type="text" class="form-control" placeholder="DropDate">
						</div>

						  <div class="form-group">
                            <label for="service">Select Services</label>
                            
                            <select name="Service_Id" id="service" class="form-control">
                            	   <option value="">Select Service</option>
                               @foreach($service as $service)                               
                            	<option value="{{$service->id}}">{{$service->service_name}}</option>
                              @endforeach
                            </select>

                        </div>
						
							<input type="submit" name="submit" class="form-control btn btn-success" value="Order">
					
					</form>

				</div>
			</div>
		</div>
	</div>
	
	@endsection