@extends('layouts.master')

@section('title', "Contact Us" )

@section('header')

    <h2>Contact Us</h2>

@endsection


@section('content')

<section class="contact-us-section">
    <div class="container">
        <div class="row">
            
            {{-- Left Section --}}

            <div class="col-md-6">
                <div class="col-md-8">
                    <h5>Contact Details</h5>
                    <div class="contact-us-box">
                        <div class="row">
                            <div class="col-md-2 contact-left">
                                <i class="fas fa-map-marked"></i>
                            </div>
                            <div class="col-md-10 contact-right">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, impedit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-us-box">
                        <div class="row">
                            <div class="col-md-2 contact-left">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="col-md-10 contact-right">
                                <a href="tel:9999999999">+91-9999999999</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-us-box">
                        <div class="row">
                            <div class="col-md-2 contact-left">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="col-md-10 contact-right">
                                    <a href="mailto:email@something.com">email@something.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Section --}}
            
            <div class="col-md-6">
                <form action="" method="POST">
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