@extends('layouts.master')

@section('title', "My Profile")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')
<!-- order modal -->

	<div  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize" id="exampleModalLabel1">order your laundry</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="orders" method="post" class="p-3">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name1" class="col-form-label">Your Email</label>
							<input type="email" class="form-control" placeholder=" " name="Name" id="recipient-name1" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name2" class="col-form-label">Phone</label>
							<input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name2" required="">
						</div>
						<div class="form-group">
							<label class="mr-2 col-form-label">Pick Up</label>
							<input id="datepicker1" name="check in" type="text" value="mm/dd/yyyy" class="form-control" required="">
						</div>
						<div class="form-group">
							<label class="mr-2 col-form-label">Delivery </label>
							<input id="datepicker2" name="check out" type="text" value="mm/dd/yyyy" class="form-control" required="">
						</div>
						<div class="form-check">
							<label class="form-check-label col-form-label" for="l1">
								<input type="checkbox" class="form-check-input" value="" id="l1">Wash& Fold
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label col-form-label" for="l2">
								<input type="checkbox" class="form-check-input" value="" id="l2">Handwash
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label col-form-label" id="l3">
								<input type="checkbox" class="form-check-input" value="" id="13">Dry Clean
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label col-form-label" for="l4">
								<input type="checkbox" class="form-check-input" value="" id="l4">Carpets
							</label>
						</div>
						<div class="form-group">
							<label for="comment" class="col-form-label">Pickup Address:</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div>

						<div class="right-w3l">
							<input type="submit" class="form-control" value="pick my laundry">
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- //order modal -->
	@endsection