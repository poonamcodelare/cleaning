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
<section class="hero-section main_carousel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
         <?php $bsr=0;?>        
           @foreach($banner as $banner)
            <div class="carousel-item bitem{{$bsr++}}">
            <img class="d-block w-100" src="../dashboard/public/uploads/banners/{{$banner->Banner_Images}}" alt="First slide">
             <div class="carousel-caption text-right">
                <h3 class="text-center">{{$banner->Banner_Title}}</h3>
                <p class="center-justified">{{$banner->Banner_Content}}</p>
            </div>
            </div>
            @endforeach                       
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



<section class="banner-section">
    <!--Add order -->
<h3 class="text-center" style="margin: auto;padding: 30px;">Schedule One or More Services from Tajoutlet</h3>
<form action="orders" method="post" class="p-3" autocomplete="off">
@csrf
    <div class="container">
      <div class="row">
        @if($errors->any())
        @foreach($errors->all() as $errors)
                <div class="alert alert-info">{{$errors}}</div> 
            @endforeach
        @endif

          @if(Session::has('success'))
        <div class="alert alert-info">
           {{Session::get('success')}}
        </div>
       @endif 

        <input type="hidden" class="form-control" name="User_Id" id="name" value="">

          <input type="hidden" class="form-control" name="Order_Title" id="Order_Title" value="">

          <input type="hidden" class="form-control" name="Order_Types" id="Order_Types">

          <input type="hidden" class="form-control" name="Order_content" id="Order_content" placeholder="Order Content">

          <input type="hidden" class="form-control" name="Payments" id="Payments">
<!-- City -->
            <div class="col-sm-2">  
                <div class="facilities-city">  
                <span class="label">Select City</span>
                 <select name="City_Id" id="city"  class="form-control">
                   <option value="">Select City</option>
                    @foreach($city as $city)                               
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                 </select>
                </div>
          </div>
<!-- Service -->
            <div class="col-sm-8">
                <div class="facilities-city">
                    <span class="label">Select Service</span>
                    <span class="input">
                        <select name="Service_Id[]" id="service" class="selectpicker" multiple data-live-search="true">
                          <option value="">Select Service</option><br>
                           @foreach($service as $service_loc)                               
                            <option value="{{$service_loc->id}}">{{$service_loc->service_name}}</option>
                           @endforeach
                        </select>
                    </span>
               </div>
            </div>

          <!--   <div class="col-sm-2">
                <div class="facilities-date">
                    <span class="label">PickDate</span>
                    <input id="dt1" name="check_in" type="text" class="form-control" placeholder="PickDate">
               </div>
            </div>
            <div class="col-sm-2">
                <div class="facilities-date">
                    <span class="label">DropDate</span>
                    <input id="dt2" name="check_out" type="text" class="form-control" placeholder="DropDate">
                </div>
            </div>
 -->
            <div class="col-sm-2">
                <div class="facilities-h">
                    <p></p>
                   <input type="submit" name="submit" class="form-control btn btn-success" value="Order" style="background-color: #4ea453;padding: 0px;color: white">
                </div>
            </div>

        
      </div>
   </div>
 </form>

<!-- End order -->
    <div class="text-center bg-green-dark">
        <h3 class="text-center heading-text banner-green-text">How it works</h3>
    </div>
    <img class="banner-img"src=" {{asset('public/img/banners/how-it-works-banner.jpg')}} " alt="" style="width:100%;">
</section>

{{-- services section --}}
<section class="service-section">
    <div class="text-center">
        <h3 class="text-center heading-text">Services</h3>
    </div>
    <div class="container">
        <div class="row">

            @foreach($service as $service)
            <div class="col-md-3 service-container">
                <div class="col-md-10 offset-md-1 service-box">

                    <img class="service-icon" src="../dashboard/public/uploads/services/{{$service->service_image}}" alt="">

                    <p class="service-text">{{$service->service_name}}</p>
                    <p style="padding: 5px 8px;" class="text-center">{{substr($service->service_description,0, 150)}}...</p>
                </div>
            </div>
            @endforeach
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
             @foreach($package as $package)
            <div class="col-md-3 package-container mb-2">

                <div class="col-md-12 package-box">
                    
                    <div class="package-header">
                        <h5>Laundry</h5>
                    </div>
                    <div class="package-body">
                        
                        <span class="package-price"><i class="fas fa-rupee-sign"></i>{{$package->Package_Price}}</span>
                        <p>{{substr($package->Package_Content,0,240)}}.....</p>

                    </div>
                    <div class="package-footer">
                        <h5>T&C Apply</h5>
                    </div>
                    
                </div>
                
            </div>
            @endforeach
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
            <div class="col-6 col-md-3 col why-us-container mb-2">
                <div class="col-md-12 why-us-box">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 why-us-img-container">
                                
                            <img src=" {{asset('public/img/vectors/why-us-1.png')}} " alt="why-choose-us" class="why-us-img">
                                    
                        </div>
                        <div class="col-md-12 why-us-content">
                            <h6>Pick and Delivery clothes</h6>
                            <p>Pick My Laundry provides premium washing and dry cleaning service leveraging mobile based technology. We pick up your dirty duds from your doorstep and deliver fresh, clean clothes back at your doorstep.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-6 col-md-3 col why-us-container mb-2">
                <div class="col-md-12 why-us-box">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 why-us-img-container">
                                
                            <img src=" {{asset('public/img/vectors/why-us-2.png')}} " alt="why-choose-us" class="why-us-img">
                                    
                        </div>
                        <div class="col-md-12 why-us-content">
                            <h6>clothes cleaning</h6>
                            <p>We also make sure that we thoroughly clean all the clothes that come to us. We aren't like those services who just place tons of perfume on to the clothes to make it seem like it is clean.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
           
            <div class="col-6 col-md-3 col why-us-container">
                <div class="col-md-12 why-us-box">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 why-us-img-container">
                                
                            <img src=" {{asset('public/img/vectors/why-us-5.png')}} " alt="why-choose-us" class="why-us-img">
                                    
                        </div>
                        <div class="col-md-12 why-us-content">
                            <h6>BEST IN CLASS EQUIPMENT AND DETERGENTS</h6>
                            <p>Choosing Laundry DetergentsYour choice of the best laundry detergent should be based on the kinds of clothes that need to be cleaned. If the clothes are excessively soiled, then you should choose powerful detergents.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-6 col-md-3 col why-us-container">
                <div class="col-md-12 why-us-box">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 why-us-img-container">
                                
                            <img src=" {{asset('public/img/vectors/why-us-6.png')}} " alt="why-choose-us" class="why-us-img">
                                    
                        </div>
                        <div class="col-md-12 why-us-content">
                            <h6>washing Machine quality</h6>
                            <p>Comfort, performance and energy-efficiency: Siemens washing machines always offer you state-of-the-art technology. Innovative functions not only provide optimal results, they also make your life easier.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Testimonial section --}}

<section class="testimonial-section">
   
    <div class="container">
        <div class="row">
    <div class="col-md-8 col-center m-auto">
      <h2 class="text-center">Testimonials</h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
        <?php $doted=0;?>
        <?php $dotedcl=0;?>
         @foreach($testimonial as $test_doted)
          <li data-target="#myCarousel" data-slide-to="{{$doted++}}" class="li{{$dotedcl++}}" style="width:30px;"></li>
          @endforeach
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
         <?php $dote=0;?>
          @foreach($testimonial as $testimonial)
          <div class="item carousel-item item{{$dote++}}">
            <div class="img-box"><img src="../dashboard\public\uploads\testimonials/{{$testimonial->Testimonial_Images}}" alt=""></div>
            <p class="testimonial">{{$testimonial->Testimonial_Contents}}</p>
            <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
          </div>
          @endforeach          
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
    </div>
</section>


@endsection

@section('scripts')

<script src="{{asset('public/js/owl.carousel.min.js')}} "></script>
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
});
    $(document).ready(function(){
        $(".testimonial-section .carousel-indicators .li0").attr('class', 'active li0');
    $(".carousel-inner .item0").attr('class', 'active item0 item carousel-item');
    $(".main_carousel .carousel-inner .bitem0").attr('class', 'active bitem0 carousel-item');
   }); 
</script>


@endsection