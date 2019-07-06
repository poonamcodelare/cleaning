@extends('layouts.master')

@section('title', "About Us" )

@section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection

@section('content')
    
    <section class="about-us-section text-center my-4">
        <div class="container">
            <div class="col-md-10 offset-md-1">
                <h4 class="heading-about">About Uclean</h4>
                <p class="text-center">Pick My Laundry provides premium washing and dry cleaning service leveraging mobile based technology. We pick up your dirty duds from your doorstep and deliver fresh, clean clothes back at your doorstep.Try Pick My Laundry by scheduling the pickup and get your laundry and dry clean at the tap of a button. We also do carpet dry cleaning, shoe dry cleaning, sofa cover dry cleaning and so on.</p>
            </div>
        </div>
    </section>
    <section class="founder-section text-center my-4">
        <div class="container">
            <div class="col-md-10 offset-md-1">
                <h4 class="heading-about">Laundry processes</h4>
                <div class="row">
                    <div class="col-md-4 founder-img-container">
                        <img class="founder-img" src=" {{asset('public/img/gallery/g4.jpg')}} " alt="">
                    </div>
                    <div class="col-md-8 founder-content">
                     Laundry processes include washing (usually with water containing detergents or other chemicals), agitation, rinsing, drying, pressing (ironing), and folding. The washing will often be done at a temperature above room temperature to increase the activities of any chemicals used and the solubility of stains, and high temperatures kill micro-organisms that may be present on the fabric. Many professional laundry services are present in the market which offers at different price range.
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <section>
        <div class="container idea-section">
            <div class="row">
                <div class="col-md-3 idea-container">
                    <img src=" {{asset('public/img/about/ab_1.png')}} " class="idea-about" alt="">
                    <p class="text-center my-3">We want to move the laundry service industry forward by creating a sustainable and prosperous future while giving back to our stakeholders.</p>
                </div>
                <div class="col-md-3 idea-container">
                    <img src=" {{asset('public/img/about/ab_2.png')}} " class="idea-about" alt="">
                    <p class="text-center my-3">Try Pick My Laundry by scheduling the pickup and get your laundry and dry clean at the tap of a button. We also do carpet dry cleaning, shoe dry cleaning, sofa cover dry cleaning and so on.</p>
                </div>
                <div class="col-md-3 idea-container">
             
                         <img src=" {{asset('public/img/about/ab_5.png')}} " class="idea-about" alt="">
              
                    <p class="text-center my-3">Our mission is to provide seamless and affordable dry cleaning and laundry services through innovations and sophisticated equipment.</p>
                </div>
                <div class="col-md-3 idea-container">
                    <img src=" {{asset('public/img/about/ab_4.png')}} " class="idea-about" alt="">
                    <p class="text-center my-3">Try Pick My Laundry by scheduling the pickup and get your laundry and dry clean at the tap of a button. We also do carpet dry cleaning, shoe dry cleaning, sofa cover dry cleaning and so on.</p>
                </div>

            </div>
        </div>
    </section>
@endsection