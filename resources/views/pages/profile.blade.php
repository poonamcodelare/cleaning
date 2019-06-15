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

<div class="card">
  <!-- <img src="../public/img/1.jpg" alt="John" style="width:100%"> -->
  <img src="{{asset('img/1.jpg')}}" alt="the company logo" width="100%">
  <p>Name : {{ $user->name }}</p>
  <!-- <p class="titl">CEO & Founder, Example</p> -->
  <p>Email : {{ $user->email }}</p>

  <p><button>Details</button></p>
</div>

</body>
</html>

    
@endsection