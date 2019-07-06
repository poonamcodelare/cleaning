@extends('layouts.master')

@section('title', "My Order")

{{-- @section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection --}}

@section('content')
<style>
.cus_select {
    width: 16%;
    float: left;
    font-size: 15px;
    line-height: 18px;
}
    .cus_select img {
    width: 100%;
    margin-bottom: 20px;
}
</style>
<br>
<div class="dryclining">
    

  

        <div>
            <img src="{{asset('public/img/dry-cleaning_banner.jpg')}}" alt="img" style="width:100%;height: 50%;">
        </div>

    </div>

  <div class="clearfix"></div>
   <section class="container container2">    
    <div class="row">
       <div class="col-sm-12 text-center" style="margin-top: 50px;">
        <h1>State of the Art Live Dry-Cleaning Lounge</h1>
        
        <p><strong>A Glimpse into Uclean Select Store , Defence Colony , New Delhi</strong></p>
       </div><br clear="all">
        <div class="col-md-4"><img class="img-responsive" src="http://uclean.in/public/front/assets/images/LRM_EXPORT_20180621_154330.jpg" style="width:100%"></div>
        
   
        <div class="col-md-4"><img class="img-responsive" src="http://uclean.in/public/front/assets/images/LRM_EXPORT_20180621_170419.jpg" style="width:100%"></div>        
    
        <div class="col-md-4"><img class="img-responsive" src="http://uclean.in/public/front/assets/images/washing.png" style="width:100%"></div>
        
    </div>
    <div class="row">
       <div class="" style="padding:50px 20px;lign-height:20px; font-size:17px;">
        <p>UClean has been on top of the game for revolutionizing the cleaning Industry of India. While the brand has been providing dry-cleaning and premium dry-cleaning services across its stores in India, throughout Noida, Delhi, Gurgaon, Pune, Bangalore, Hyderabad, Kolkata, Chennai etc., we have now introduced UClean Select, which is a state of the art premium Live dry-cleaning lounge, the first of its kind, right now in Defence Colony, New Delhi. UClean Select offers an ultimate solution for all garment woes by offering dedicated and customized dry cleaning and fabric care services to enhance your garment’s shelf life. Through our Live Dry-Cleaning store, the first one in Defence Colony, New Delhi, we bring forth transparency and credibility to the best Dry-Cleaning experience, that was unheard of in the past. An extended range of services and a structured process ensure the perfect care, each time, for your worthy possessions. With unparalleled dedication towards getting you the best value for every penny spent, we are constantly striving to achieve Global Standards in dry cleaning. So next time your clothes need to be treated with utmost care and love, remember to look for the best dry-cleaning store near you, only with UClean Select</p>
        </div>
    </div>
    </section> 
    <div class="container container3">
       <h2> TECHNOLOGY INTEGRATION</h2>
       <p style="padding:50px 20px;lign-height:20px; font-size:17px;"> Our Italian Smell-Free Dry-Cleaning techniques using the Perc cleaning liquid promises to offer the best possible professional care for your garment and upholstery. Thus, UCLEAN SELECT is the ultimate expert care centre for all your garment cleaning needs. 

Every garment is differently treated with immaculate care using Alliance Laundry Systems for their SoftWash Xtreme care dry wet cleaning technology that lends longevity to the fabric while ensuring better, more powerful cleaning. A new way to pamper your clothes!</p>
    </div>
    
   <section class="container container4">
        <div class="row">
          <div class="col-md-12">
            <h2>The Process</h2>
             </div>
          <div class="cus_select">
              <img src="http://uclean.in/public/front/assets/images/uclean-select1.jpg">
              Drop in at our store and
experience Live Dry-Cleaning/
Order through our App or
 Call us for free pick up
services at a chosen time slot!</div>
          <div class="cus_select"><img src="http://uclean.in/public/front/assets/images/uclean-select2.jpg">
          Assessment of the fabric to
ensure a customized service.
(This include specialized care for
delicate fabrics, repairing of loose
buttons, stiches, darning etc.)</div>
          <div class="cus_select"><img src="http://uclean.in/public/front/assets/images/uclean-select3.jpg">
              Meticulous
Spot Treatment.</div>
          <div class="cus_select"><img src="http://uclean.in/public/front/assets/images/uclean-select4.jpg">
              Customised
Dry-Cleaning.</div>
          <div class="cus_select"><img src="http://uclean.in/public/front/assets/images/uclean-select5.jpg">
              Steam Ironing and finishing
followed by Quality complaint checks
for utmost client satisfaction.
</div>
            <div class="cus_select"><img src="http://uclean.in/public/front/assets/images/uclean-select6.jpg">
                 We at UCLEAN SELECT
are happy to serve you with
 clean and and fresh clothes. <br><br> <p style="color:green;">HAPPY CUSTOMERS HAPPY U. </p> </div>
        </div>
   </section>
        
        
        <section class="container container5">
            <div class="row" style="padding:40px;">
           <h2 class="">FRANCHISE ENGAGEMENT</h2>
            <p>
                 With customized franchise models in play , investing with UClean Select allows the franchise owners to exercise choice & flexibility and build on an ingrained brand name promising a quick break even though client commitment and loyality . The franchise owners for UClean Select stand to benefit from
            </p>
            <ul>
                <li>A well - established brand name and proven credibility</li>
                <li>Market standing and vitality backed by celebrity endorsment</li>
                <li>End to End Marketing Support covering all major aspects such a generation of leads as well as pre and post sales assistance</li>
                <li>Prolific leads culminating to gauranteed business through the UClean laundry network</li>
                <li>Advantageous proffesional approach owing to the expertise and skill sets of the industry experts in dry cleaning</li>
                <li>State of the art technology for utmost results</li>
                <li>Live - Cleaning set up to ensure transparency and client satisfaction .</li>
            </ul>
        </div>
        </section>
    
</div>

@endsection
