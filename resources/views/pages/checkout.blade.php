@extends('layouts.master')

@section('title', "Contact Us" )

@section('header')

    <h2>Contact Us</h2>

@endsection


@section('content')

<div class="row">
  <div class="col-75">
    <div class="container-checkout">
      <form action="checkout" method="post">
      
        <div class="row">
          <div class="col-lg-3 col-sm-6">
         
            <div class="card hovercard">
                <div class="cardheader">

                </div>
           
                <div class="avatar">
                    <img alt="" src="{{asset('uploads/'.$user->Profile_Image)}}">
                </div>
                <div class="info">
                    <div class="title" style="color: #0b95ab;">
                        {{ $user->name }}
                    </div>
                    <div class="desc">{{ $user->email }}</div>
                    <div class="desc">{{ $user->Phone_Number }}</div>
                    <div class="desc">{{ $user->Address }}</div>
                </div>
          
            </div>

        </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn btn-success">
      </form>
    </div>
  </div>
  <div class="col-25">
  	  <div class="form-group">  
        
           @foreach($data as $data)                               
        	<input type="hidden" name="" value="{{$data['id']}}">
          @endforeach
        

    </div>
    <div class="container">
      <h4>Customer Detail <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> </span></h4>
      <p><a href="#">Service Name</a> <span class="price">{{$data['service_name']}}</span></p>
      <p><a href="#">PickDate</a> <span class="price">{{$new['PickUp_At']}}</span></p>
      <p><a href="#">DropDate</a> <span class="price">{{$new['Delivery_At']}}</span></p>
      <p><a href="#">Service Price</a> <span class="price">{{$data['service_price']}}</span></p>
     <!--  <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p> -->
    </div>
  </div>
</div>


@endsection