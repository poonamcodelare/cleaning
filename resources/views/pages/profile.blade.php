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

<div class="container">
  @if(Session::has('success'))
    <div class="alert alert-info">
       {{Session::get('success')}}
    </div>
   @endif 

  <div class="row">
    <div class="col-sm-4">
      <figure class="customer_profile_image">
        <span class="badge badge-info" data-toggle="modal" data-target="#profilePicture"><i class="fa fa-upload"></i></span>
        @if(strlen($user->Profile_Image) == "")
         <img src="{{asset('img/new.png')}}" alt="the company logo" width="80px; height="80px">
         @else
         <img src="{{asset('uploads/'.$user->Profile_Image)}}" alt="the company logo" width="80px; height="80px;">
         @endif
      </figure>
    
    </div>
    <div class="col-sm-8">

    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <!-- <a href="gallery">Gallery</a> -->
      <a href="orders">Order</a>
<!--       <a href="#setting">Setting</a> -->
   </div>

      &nbsp; &nbsp; &nbsp;
      <p>Name : {{ $user->name }}</p>
      <p>Email : {{ $user->email }}</p>
      <p>phone : {{ $user->Phone_Number }}</p>
      <p>Address : {{ $user->Address }}</p>
      <p><a class="" href="{{ 'edit/'.$user->id }}">Edit</a>
        <!-- <a href="{{ 'delete/'.$user->id }}">Delete</a> -->
      <!-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ 'delete/'.$user->id }}"><i class="fa fa-trash"></i>Delete</a> -->

     | <a href="" class="" data-toggle="modal" data-target="#deleteModel"><i class="fa fa-trash"></i></a>

    </p>

         <div class="modal fade" id="deleteModel">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Delete</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                      </div>
                      <div class="modal-body">
                         <h5 class="text-danger">You really want to delete?</h5>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                         <a href="{{ 'delete/'.$user->id }}" class="btn btn-primary">Delete</a>
                      </div>
                  </div>
              </div>
          </div>
      <!-- <p>Image : {{ $user->image }}</p> -->
     
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
      
          <button type="button" class="" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>



 



</body>
</html>

    
@endsection