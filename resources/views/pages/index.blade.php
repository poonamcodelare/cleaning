@extends('layouts.master')

@section('title', "Home" )

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  

{{-- banner Section --}}
<section class="hero-section">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/banners/banner1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/banners/banner2.jpg')}}" alt="Second slide">
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>

{{-- app promotion section --}}

<section class="app-promo">
    <div class="d-flex justify-content-center">
        <h6 class="app-promo-content align-self-center">Download the app now </h6>
        <div class="app-icon">
            <img src="{{asset('img/app_logos/apple.png')}}" alt="">
        </div>
        <div class="app-icon">
            <img src="{{asset('img/app_logos/android.png')}}" alt="">
        </div>
    </div>
</section>

{{-- banner section --}}

<section class="banner-section">
    <div class="text-center bg-green-dark">
        <h3 class="text-center heading-text banner-green-text">How it works</h3>
    </div>
    <img class="banner-img"src=" {{asset('img/banners/how-it-works-banner.jpg')}} " alt="">
</section>

{{-- services section --}}
<section class="service-section">
    <div class="text-center">
        <h3 class="text-center heading-text">Services</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 service-container">
                <div class="col-md-10 offset-md-1 service-box">
                    <img class="service-icon" src="https://cdn.iconscout.com/icon/free/png-256/shoes-97-160935.png" alt="">
                    <p class="service-text">lorem service</p>
                </div>
            </div>
            <div class="col-md-3 service-container">
                <div class="col-md-10 offset-md-1 service-box">
                    <img class="service-icon" src="https://cdn.iconscout.com/icon/free/png-256/shoes-97-160935.png" alt="">
                    <p class="service-text">lorem service</p>
                </div>
            </div>
            <div class="col-md-3 service-container">
                <div class="col-md-10 offset-md-1 service-box">
                    <img class="service-icon" src="https://cdn.iconscout.com/icon/free/png-256/shoes-97-160935.png" alt="">
                    <p class="service-text">lorem service</p>
                </div>
            </div>
            <div class="col-md-3 service-container">
                <div class="col-md-10 offset-md-1 service-box">
                    <img class="service-icon" src="https://cdn.iconscout.com/icon/free/png-256/shoes-97-160935.png" alt="">
                    <p class="service-text">lorem service</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- media ads section --}}
<section class="media-section">
    <div class="text-center">
        <h3 class="text-center heading-text">Media Mentions</h3>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="media-banner col-md-3">
                <img src="https://media.cdn.gradconnection.com/uploads/7bae1202-5f75-42af-957d-4d6fed98f2b5-Google-Logo.png" alt="">
            </div>
            <div class="media-banner col-md-3">
                <img src="https://media.cdn.gradconnection.com/uploads/7bae1202-5f75-42af-957d-4d6fed98f2b5-Google-Logo.png" alt="">
            </div>
            <div class="media-banner col-md-3">
                <img src="https://media.cdn.gradconnection.com/uploads/7bae1202-5f75-42af-957d-4d6fed98f2b5-Google-Logo.png" alt="">
            </div>
            <div class="media-banner col-md-3">
                <img src="https://media.cdn.gradconnection.com/uploads/7bae1202-5f75-42af-957d-4d6fed98f2b5-Google-Logo.png" alt="">
            </div>
        </div>
    </div>
    
</section>

{{-- packages and promotion section --}}

<section class="package-section">
    <div class="text-center">
        <h3 class="text-center heading-text">Packages & Promotions</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 package-container">
                <div class="col-md-12 package-box">
                    <div class="package-header">
                        <h5>Laundry</h5>
                    </div>
                    <div class="package-body">
                        <span class="package-price"><i class="fas fa-rupee-sign"></i> 350</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, fugit.</h6>
                        <hr>
                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, incidunt!</h6>

                    </div>
                    <div class="package-footer">
                        <h5>T&C Apply</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 package-container">
                <div class="col-md-12 package-box">
                    <div class="package-header">
                        <h5>Laundry</h5>
                    </div>
                    <div class="package-body">
                        <span class="package-price"><i class="fas fa-rupee-sign"></i> 350</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, fugit.</h6>
                        <hr>
                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, incidunt!</h6>

                    </div>
                    <div class="package-footer">
                        <h5>T&C Apply</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 package-container">
                <div class="col-md-12 package-box">
                    <div class="package-header">
                        <h5>Laundry</h5>
                    </div>
                    <div class="package-body">
                        <span class="package-price"><i class="fas fa-rupee-sign"></i> 350</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, fugit.</h6>
                        <hr>
                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, incidunt!</h6>

                    </div>
                    <div class="package-footer">
                        <h5>T&C Apply</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 package-container">
                <div class="col-md-12 package-box">
                    <div class="package-header">
                        <h5>Laundry</h5>
                    </div>
                    <div class="package-body">
                        <span class="package-price"><i class="fas fa-rupee-sign"></i> 350</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, fugit.</h6>
                        <hr>
                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, incidunt!</h6>

                    </div>
                    <div class="package-footer">
                        <h5>T&C Apply</h5>
                    </div>
                </div>
            </div>
     
        </div>
    </div>
</section>

{{-- Why us section --}}
<section class="why-us-section">
    <div class="text-center">
        <h3 class="text-center heading-text">Why choose us</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col why-us-container">
                <div class="col-md-12 why-us-box">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 why-us-img-container">
                                
                            <img src=" {{asset('img/vectors/why-us-1.png')}} " alt="why-choose-us" class="why-us-img">
                                    
                        </div>
                        <div class="col-md-12 why-us-content">
                            <h6>BEST IN CLASS EQUIPMENT AND DETERGENTS</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam cupiditate nihil aliquam odit unde enim eum iure corporis accusamus fugiat.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col why-us-container">
                <div class="col-md-12 why-us-box">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 why-us-img-container">
                                
                            <img src=" {{asset('img/vectors/why-us-2.png')}} " alt="why-choose-us" class="why-us-img">
                                    
                        </div>
                        <div class="col-md-12 why-us-content">
                            <h6>BEST IN CLASS EQUIPMENT AND DETERGENTS</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam cupiditate nihil aliquam odit unde enim eum iure corporis accusamus fugiat.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col why-us-container">
                <div class="col-md-12 why-us-box">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 why-us-img-container">
                                
                            <img src=" {{asset('img/vectors/why-us-3.png')}} " alt="why-choose-us" class="why-us-img">
                                    
                        </div>
                        <div class="col-md-12 why-us-content">
                            <h6>BEST IN CLASS EQUIPMENT AND DETERGENTS</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam cupiditate nihil aliquam odit unde enim eum iure corporis accusamus fugiat.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col why-us-container">
                <div class="col-md-12 why-us-box">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 why-us-img-container">
                                
                            <img src=" {{asset('img/vectors/why-us-5.png')}} " alt="why-choose-us" class="why-us-img">
                                    
                        </div>
                        <div class="col-md-12 why-us-content">
                            <h6>BEST IN CLASS EQUIPMENT AND DETERGENTS</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam cupiditate nihil aliquam odit unde enim eum iure corporis accusamus fugiat.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col why-us-container">
                <div class="col-md-12 why-us-box">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 why-us-img-container">
                                
                            <img src=" {{asset('img/vectors/why-us-6.png')}} " alt="why-choose-us" class="why-us-img">
                                    
                        </div>
                        <div class="col-md-12 why-us-content">
                            <h6>BEST IN CLASS EQUIPMENT AND DETERGENTS</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam cupiditate nihil aliquam odit unde enim eum iure corporis accusamus fugiat.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Testimonial section --}}

<section class="testimonial-section">
    <div class="text-center">
        <h3 class="text-center heading-text">Testimonials</h3>
    </div>
    <div class="container">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="testimonial-box">
                    <div class="testimonial-header">
                        <div class="row">
                            <div class="col-md-3 avatar-img-container">
                                <img class="avatar-img" src="{{asset('img/avatar-male.jpg')}} " alt="">
                            </div>
                            <div class="col-md-9">
                                <h5>Customer Name</h5>                    
                                <p class="testimonial-subtitle">( Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, eveniet. )</p>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="testimonial-body">
                        <hr>
                        <p class="testimonial-content">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus soluta ad veritatis ipsam vitae rem consectetur aut perspiciatis facilis ea.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box">
                    <div class="testimonial-header">
                        <div class="row">
                            <div class="col-md-3 avatar-img-container">
                                <img class="avatar-img" src="{{asset('img/avatar-male.jpg')}} " alt="">
                            </div>
                            <div class="col-md-9">
                                <h5>Customer Name</h5>                    
                                <p class="testimonial-subtitle">( Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, eveniet. )</p>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="testimonial-body">
                        <hr>
                        <p class="testimonial-content">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus soluta ad veritatis ipsam vitae rem consectetur aut perspiciatis facilis ea.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box">
                    <div class="testimonial-header">
                        <div class="row">
                            <div class="col-md-3 avatar-img-container">
                                <img class="avatar-img" src="{{asset('img/avatar-male.jpg')}} " alt="">
                            </div>
                            <div class="col-md-9">
                                <h5>Customer Name</h5>                    
                                <p class="testimonial-subtitle">( Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, eveniet. )</p>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="testimonial-body">
                        <hr>
                        <p class="testimonial-content">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus soluta ad veritatis ipsam vitae rem consectetur aut perspiciatis facilis ea.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box">
                    <div class="testimonial-header">
                        <div class="row">
                            <div class="col-md-3 avatar-img-container">
                                <img class="avatar-img" src="{{asset('img/avatar-male.jpg')}} " alt="">
                            </div>
                            <div class="col-md-9">
                                <h5>Customer Name</h5>                    
                                <p class="testimonial-subtitle">( Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, eveniet. )</p>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="testimonial-body">
                        <hr>
                        <p class="testimonial-content">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus soluta ad veritatis ipsam vitae rem consectetur aut perspiciatis facilis ea.
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>

@endsection

@section('scripts')

<script src="{{asset('js/owl.carousel.min.js')}} "></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>


@endsection