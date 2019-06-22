@extends('layouts.master')

@section('title', "My Profile")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.titl {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile</h2>
<!-- &nbsp; &nbsp; &nbsp; -->
<!-- <div class="card">

  <img src="{{asset('img/1.jpg')}}" alt="the company logo" width="100%">
  <p>Name : {{ $user->name }}</p>
  <p>Email : {{ $user->email }}</p>

  <p><button>Details</button></p>
</div> -->


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <figure class="customer_profile_image">
        <span class="badge badge-info" data-toggle="modal" data-target="#profilePicture"><i class="fa fa-upload"></i></span>
        @if(strlen($user->image) == "")
         <img src="{{asset('img/new.png')}}" alt="the company logo" width="80px; height="80px">
         @else
         <img src="{{asset('uploads/'.$user->image)}}" alt="the company logo" width="80px; height="80px;">
         @endif
          <!-- <p>image : {{ $user->image }}</p> -->
      </figure>
    
    </div>
    <div class="col-sm-8">

    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="#gallery">Gallery</a>
      <a href="orders">Order</a>
      <a href="#setting">Setting</a>
   </div>

      &nbsp; &nbsp; &nbsp;
      <p>Name : {{ $user->name }}</p>
      <p>Email : {{ $user->email }}</p>
      <p>phone : {{ $user->phone }}</p>
      <p>Address : {{ $user->Address }}</p>
      <p>Image : {{ $user->image }}</p>
     
    </div>
    
  </div>
</div>

 <div class="modal fade" id="profilePicture" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <div class="modal-body">
               <div class="row justify-content-center">
                  <form action="/profile" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <input type="file" class="form-control-file" name="image" id="avatarFile" aria-describedby="fileHelp">
                          <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
        </div>
      
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>


 



</body>
</html>

    
@endsection