@extends('layouts.master')

@section('title', "Book a service")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')
<main id="booking">

<div class="clearfix booking booking__container" style="margin-top:50px">
    <div class="overlay">
       <div class="container">
        <div class="row">
        <div class="col-6 left__side">
                <div class="card">
                    <div class="card-body">
                        <div class="card-head">
                            <h5 class="card-title">Pick Your Date !</h5>
                        </div>
                        <div class="card-date">
                            <div class="row">
                                <div class="col-6"><b>Pic Date:</b>   <input class="form-control" type="text" id="dt1"></div>
                                <div class="col-6"><b>Drop Date:</b>  <input class="form-control" type="text" id="dt2"></div>
                            </div>
                            
                            <h4 class="tex-left" id="demo" style="font-size: 14px;"></h4>
                        </div>
                      </div>
                </div>
        </div>
            <div class="col-6 right__side">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-service">
                                    <h5 class="card-title">Service Selected</h5>
                                </div>
                                <div class="card-detail">
                                       @foreach($data['services'] as $service)
                                       <span>Service Name: &nbsp;</span>{{$service}}
                                       @endforeach
                                     <p class="card-text"><h5>City: <span class="service-card-text">{{$data['city']}}</span></h5></p>

                                    <p class="card-text"><h5>location: <span class="service-card-text">{{$data['location']}}</span></h5></p>
                                </div>
                            </div>
                     </div>
            </div>
        </div>
</div>
    </div>
    
</div>

  </main>
@endsection


@section('scripts')

@endsection