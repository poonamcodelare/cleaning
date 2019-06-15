@extends('layouts.master')

@section('title', "Book a service")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-9">
                    <h3 class="text-center my-4">Pick Your Date !</h3>
            </div>
            {{-- side panel --}}
            <div class="col-md-3">
                <div class="service-card-box">
                    <h5>Service Selected:</h5>
                    <ul>
                        @foreach($data['services'] as $service)
                            <li>{{$service}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="service-card-box">
                    <h5>City: <span class="service-card-text">{{$data['location']}}</span></h5>
                
                </div>
                <div class="service-card-box">
                    <h5>location: <span class="service-card-text">{{$data['location']}}</span></h5>
                </div>
            </div>
        </div>
    </div>
  
@endsection

@section('scripts')

@endsection