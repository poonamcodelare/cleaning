@extends('layouts.master')

@section('title', "My Account")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')
<!-- order modal -->
<h3 class="text-center mt-4">Your Account</h3>
  <div class="container">
      <form method="post" action="update/{{ $user->id }}">
         {{csrf_field()}}
        <div class="row">
           <input name="_method" type="hidden" value="post">
          <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name:</label>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="name" name="name" value="{{ $user->name }}">
          </div>
        </div>
        <div class="row">
          <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Phone:</label>
          <div class="col-md-6 col-lg-4 col-xl-3">
          	<input type="text" class="form-control" id="lgFormGroupInput" placeholder="phone" name="phone" value="{{ $user->phone }}">
          </div>
        </div>

         <div class="row">
           <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Address:</label>
          <div class="col-md-6 col-lg-4 col-xl-3">
          	<input type="text" class="form-control" id="lgFormGroupInput" placeholder="address" name="address" value="{{ $user->Address }}">
          </div>
        </div>

        <div class="row">
          <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email:</label>
          <div class="col-md-6 col-lg-4 col-xl-3">
              <input type="email" class="form-control" id="lgFormGroupInput" placeholder="email" name="email" value="{{$user->email}}">
          </div>
        </div>

        &nbsp;
        <div class="form-group text-center col-md-6">
         
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
</div>

	
	@endsection