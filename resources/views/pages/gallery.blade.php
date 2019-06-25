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

    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g1.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g1.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g2.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g2.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g3.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g3.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g4.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g4.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g5.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g5.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g6.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g6.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g7.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g7.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g8.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g8.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g9.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g9.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g10.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g10.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/g11.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g11.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="{{asset('img/gallery/curtain.jpg')}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{asset('img/gallery/g12.jpg')}}" alt="">
          </a>
    </div>
  </div>

</div>
<!-- /.container -->

@endsection