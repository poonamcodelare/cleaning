@extends('layouts.master')

@section('title', "Contact Us" )

@section('header')

    <h2>Contact Us</h2>

@endsection


@section('content')
<style type="text/css">
  input[type=checkbox], input[type=radio]{
    height: 20px;
    width: 20px;
    position: relative;
    top: 6px;

  }
  .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #43a047;
    border-color: #3cc42b #dee2e6 #fff;
    color: #eee;
}
.nav {
     display: flex!important;
        flex-wrap: none!important;
    }

</style>
<!-- Add index field Data -->

<!-- <div class="newday"></div> -->
<!-- End index field Data -->
<div class="container-fluid">
  <form action="order" method="post">
      @csrf

          <div class="form-group">
            <!--  @isset($user->id) -->
              <input type="hidden" class="form-control" name="User_Id" id="name" value="{{$user->id}}">
            <!--  @endisset -->
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" name="Order_Title" id="Order_Title" value="test_title">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" name="Order_Types" id="Order_Types">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" name="Order_content" id="Order_content" placeholder="Order Content">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" name="Payments" id="Payments">
            </div>
            <div class="form-group">
               @foreach($abc as $service)
               <input type="hidden" name="Service_Id[]" value="{{$service[0]['service_name'].':'}}{{$service[0]['service_price']}}">
              @endforeach
            </div>
            <div class="form-group">
                                  
                <input type="hidden" name="City_Id" value="{{$city}}">
                 
             
            </div>
  <div class="row" id="date_pickup_section">
    <div class="col-5" style="background-color:#efefef;visibility: visible;animation-name: congrats;margin: auto;margin-top: 20px;" id="date_pickup_section__left" name="check_in">
       <h3 style="margin-top: 20px;">Select a Suitable Pickup Time</h3>

       <!-- <input type="date" name=""  class="form-control"> -->

   
          <div class="facilities-date">
<!--             <span>PickDate</span> -->
                <input id="dt1" name="pickdate" type="text" autocomplete="off" class="form-control">
          </div>

        
   
      
<!-- 
      <ul class="nav nav-tabs text-dark" role="tablist" id="left_bar" style="margin-left: -12px;">
        
      </ul> -->


<!-- Select a Suitable Pickup Time -->
<!-- Tab Monday panes --> 
<div class="tab-content">
  <div role="tabpanel" class="tab-pane  active " id="monday">

        

  </div>

<!-- Tab Tuesday panes -->
  <div role="tabpanel" class="tab-pane fade" id="tuesday">
       

  </div>

  <!-- Tab wednesday panes -->
  <div role="tabpanel" class="tab-pane fade" id="wednesday">
    

  </div>
  <!-- Tab Thursday panes -->
  <div role="tabpanel" class="tab-pane fade" id="thrusday">
     

  </div>

   <!-- Tab Friday panes -->
  <div role="tabpanel" class="tab-pane fade" id="friday">
     

  </div>

  <!-- Tab Saturday panes -->
  <div role="tabpanel" class="tab-pane fade" id="saturday">
      

  </div>


    <!-- Tab Sunday panes -->
  <div role="tabpanel" class="tab-pane fade" id="sunday">
    
  </div>

</div>
<!-- End Select a Suitable Pickup Time -->
      
    </div>

    <div class="col-1" style="margin-right: 3px;"></div>


    <div class="col-5" style="background-color:#efefef;margin:auto;margin-top: 20px;display: block; visibility: visible; animation-name: congrats;" id="date_pickup_section__right" name="check_out">
      <p id="printDate"></p>
      <h3>Select a Suitable Delivery Time</h3>
       <div class="drop_date_heading_show"></div>
       <!-- <input type="date" name=""  class="form-control"> -->

         
          <div class="facilities-date">
<!--             <span>DropDate</span> -->
              <input id="dt2" name="dropdate" type="text" autocomplete="off" class="form-control">
            </div>
    

      <!--   <ul class="nav nav-tabs text-dark" role="tablist" id="right_bar">      
      </ul> -->

<!-- Select a Suitable Delivery Time -->
<!-- Tab Monday panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane  active drop_one" id="mon">
     

  </div>

<!-- Tab Tuesday panes -->
  <div role="tabpanel" class="tab-pane fade drop_two" id="tue">
       
  </div>

  <!-- Tab wednesday panes -->
  <div role="tabpanel" class="tab-pane fade drop_three" id="wed">
      

  </div>
  <!-- Tab Thursday panes -->
  <div role="tabpanel" class="tab-pane fade drop_four" id="thu">
      
  </div>

   <!-- Tab Friday panes -->
  <div role="tabpanel" class="tab-pane fade drop_five" id="fri">
      

  </div>

  <!-- Tab Saturday panes -->
  <div role="tabpanel" class="tab-pane fade drop_six" id="sat">
     
  </div>


    <!-- Tab Sunday panes -->
  <div role="tabpanel" class="tab-pane fade drop_seven" id="sun">     

  </div>

</div>
<!-- End Select a Suitable Delivery Time -->
    </div>
  
  </div>

 <div class="row">
  <div class="col-12 text-center">
  

           <input type="submit" name="submit" class="btn btn-success text-light" value="Proceed" style="width: 100px;">
            </div>
  </div>
  </form>
</div>




@endsection


<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   -->
