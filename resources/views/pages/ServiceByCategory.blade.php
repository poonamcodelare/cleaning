@extends('layouts.master')

@section('title', "My Profile")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    @foreach($services as $services)

       <a href="{{ 'scategory/'. $services->category_id }}">{{$services->service_image}}</a>

    @endforeach
</body>
</html>



@endsection