@extends('layouts.master')

@section('title', "Contact Us" )

@section('header')

    <h2>Contact Us</h2>

@endsection


@section('content')

<section class="contact-us-section">
    <div class="container">
        @if(Session::has('success'))
        <div class="alert alert-info">
           {{Session::get('success')}}
        </div>
       @endif 
        <div class="row">
            
            {{-- Left Section --}}

            <div class="col-md-6">
                <div class="col-md-8">
                    <h5 class="text-center" style="font-size: 30px;">Contact Details</h5>
                    <div class="contact-us-box">
                        <div class="row">
                            <div class="col-md-2 contact-left">
                                <i class="fas fa-map-marked"></i>
                            </div><hr>
                            <div class="col-md-10 contact-right">
                                <p>The Laundry Basket is one of the largest online 
                                    laundry service providers in Delhi. We are 
                                    dedicated to provide you with the best care for
                                    your garments. Call / Drop-In or Schedule a 
                                    Pick-Up through our App !.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-us-box">
                        <div class="row">
                            <div class="col-md-2 contact-left">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="col-md-10 contact-right">
                             <b>Contact no: <a href="#" style="color:#007bff;">+91-8926389263</b></a> 
                                 <!-- <span class="glyphicon glyphicon-earphone"></span> -->
                                 <!-- <span>+91-8926389263</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="contact-us-box">
                        <div class="row">
                            <div class="col-md-2 contact-left">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="col-md-10 contact-right">
                                    <b>Email: <a href="mailto:email@something.com" style="color:#007bff;">info@tajoutlet.com</b></a>
                            </div>
                        </div>
                        <div style="position: absolute;right: 126px;padding: 10px;margin: auto">
                            <b>Address: <a href="#">DLF Phase1</a></b>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Section --}}
            
            <div class="col-md-6">
                <form action="/contact-us-now" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name<sup>*</sup></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" >
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email<sup>*</sup></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="number">Contact Number<sup>*</sup></label>
                        <input type="number" class="form-control" name="contact_number" id="number" placeholder="Enter Contact No" >
                        
                    </div>

                    <div class="form-group">
                        <label for="city">City<sup>*</sup></label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" >
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message<sup>*</sup></label>
                        <input type="text" class="form-control" name="message" id="message" placeholder="Enter Message" >
                        
                    </div>
                   
                    <button type="submit" class="btn btn-green btn-block"><i class="fas fa-check-circle"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection