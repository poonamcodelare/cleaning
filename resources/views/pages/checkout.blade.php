@extends('layouts.master')

@section('title', "Contact Us" )

@section('header')

    <h2>Contact Us</h2>

@endsection


@section('content')

<div class="row">
  <div class="col-75">
    <div class="container-checkout">

      
        <div class="row">
         
         
            <div class="col card" style="background-color: white">
                
             
                @isset($user->email)
            

                <div class="cardheader" style=" background: url('http://lorempixel.com/850/280/nature/4/');">

                </div>
                <div class="avatar">
                    <img alt="" src="{{asset('uploads/'.$user->Profile_Image)}}">
                </div>
                <div class="info">
                  
                    <div class="title">
                      <span><b>Name:</b></span>
                     @isset($user->name)
                      {{ $user->name }}             
                      @endisset
                    </div>
                   
                    <div class="title">
                      <span><b>Email:</b></span>
                      {{ $user->email }}              
                 
                    </div>
                    
                    <div class="title">
                      <span><b>Address:</b></span>
                      {{ $user->Address }}              
                 
                    </div>
                   
                    <div class="title">
                      <span><b>Phone Number:</b></span>
                      {{ $user->Phone_Number }}              
                 
                    </div>
                     
                   
                </div>

                @else

           <div class="">
            <div class="container">
                <div class="row">

          
          <div class="col-50">
            <h3>Billing Address</h3>
            <form method="post" action="{{ route('register') }}" class="row register-form">
            @csrf

                <label for="name"><i class="fa fa-user"></i> Full Name</label>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Name" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                
                <!-- Address -->
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                 <input id="address" type="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('Address') }}" placeholder="Enter Address" required>

                  @if ($errors->has('address'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                  @endif

                  <!-- Phone -->
                  <label for="city"><i class="fa fa-institution"></i> Phone</label>
                  <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Your Phone *" required>

                  @if ($errors->has('phone'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                  @endif

                <!-- Email -->
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Email" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <!-- Password -->
                    <label for="password"><i class="fa fa-envelope"></i> Password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <!-- Confirm Password -->
                    <label for="password-confirm"><i class="fa fa-envelope"></i> Confirm Password</label>
                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>

                <div class="row">
                  <div class="col-50">
             
                   
                  </div>
                  <div class="col-50">
                    <input type="submit" class="btn btn-success"  value="Register"/>
                  </div>
                </div>
              </form>
          </div>
     



                
                </div>

            </div>

            
          </div>
          @endisset
    

        </div>
 <div class="col"></div>
        <div class="col card" style="background-color: white;width: 50%;float: right;margin-right: 100px" >
                  <div class="">
            <h3>Service Detail</h3>
         
            <div class="">
              
                 @foreach($data as $data)                               
                <input type="hidden" name="" value="{{$data['id']}}">
                @endforeach

                
         
               
            </div>
            <div class="container">
            @foreach($city as $cities)                               
                <input type="hidden" name="" value="{{$cities['id']}}">
                 <p><a href="#">City Name</a> <span class="price">{{$cities['name']}}</span></p>
            @endforeach

           
            
            <p><a href="#">PickDate & Time</a> <span class="price">{{$new['pickupdate']}}, <b>{{$a}}</b> </span></p>
            <p><a href="#">DropDate & Time</a> <span class="price">{{$new['deliverydate']}}, <b>{{$b}}</b></span></p>


                <p><a href="#">Service Name</a> <span class="price">
                 

              @foreach($ghs as $value) 
              <p class="text-right">{{$value}}</p>

              @endforeach

            </span></p>

              <p><a href="#">Total Price</a> <span class="price">
              <?php 
                  $dgsh=$ghs;

              ?>

              <?php $sum = 0; ?>                
                <?php 
                foreach($dgsh as $price){
                  $ghcv=explode(':', $price);
                  $ghvgg = end($ghcv);
                  $total_price = $sum += $ghvgg;
                  }
                  echo $total_price;          
              ?>

            </span></p>
   
           </div>
            
         </div>
      </div> 
     
    </div>
        
   
    </div>
  </div>
 
</div>


@endsection