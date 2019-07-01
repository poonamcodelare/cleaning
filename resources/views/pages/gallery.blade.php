@extends('layouts.master')

@section('title', "My Order")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')

<!-- Page Content -->
<div class="container">

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Gallery</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">

    @foreach($gallery as $galleries)

    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g1.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="../../../dashboard/public/uploads/gallery/{{$galleries->Gallery_Images}}" alt="">
            <!-- <p>{{$galleries->Gallery_Content}}</p> -->
          </a>
    </div>

    @endforeach
    
  </div>

</div>
<!-- /.container -->

@endsection