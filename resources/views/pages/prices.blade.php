@extends('layouts.master')

@section('title', "See Prices" )

@section('header')

    <h2>Our Prices</h2>

@endsection

@section('content')
    <div class="price-section">
        <div class="container">
             @if(Session::has('success'))
            <div class="alert alert-info">
               {{Session::get('success')}}
            </div>
            @endif 
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="">
                        <div class="form-group">
                            <label for="price-search">Seach Price for your Location</label>
                            
                            <select name="price_search" id="price-search" class="form-control">
                               
                                {{-- Location Comming from app service provider --}}
                                
                                @foreach ($locations as $location)
                                    <option value="{{$location->id}}"> {{$location->name}} </option>
                                @endforeach
                            </select>

                        </div>
                    </form>
                </div>
            </div>

            {{-- Prices That will be update using ajax --}}
            <h2 id="location" class="text-center my-4" style="font-weight:600"></h2>

            <div class="row my-5" id="price-content" >
 
                

            </div>

        </div>
    </div>
@endsection

@section('scripts')

<script>
    $(document).ready(function(){
        loadPrices();
    })
    function loadPrices(locationId = 1){
        
        // disappear animation for content before changing the content
       
        $('#location,#price-content').animate({'opacity' : 0},200);
            
        $.ajax({
            url : 'prices/' + locationId ,
            type : 'GET',
            success : function(res){
                var content = '';
                res.forEach(price => {
                    serviceLocation = price.location.name;
                    content += `
                    <div class="prices-container col-md-6">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="card" style="width: 100%;">
                                
                                    <div class="card-body text-light bg-success">
                                        <h5 class="card-title ">${price.service.service_name}</h5>
                                        <p class="card-text ">
                                        <span class="package-price text-light "><i class="fas fa-rupee-sign"></i> ${price.Amount} </span> /  <span class="lead">
                                                ${price.Unit}
                                        </span>

                                    
                                        </p>
                                        <p>Minimum Load : 5kg</p>
                                        <p style="color:black">${price.service.service_description}</p>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
            });
           
          
            const content_not_found = `
                <div class="alert alert-danger text-center " style="width:100%">
                    No price for current location
                </div>
            `;
            if(res.length == 0){
                document.getElementById('price-content').innerHTML = content_not_found;
                document.getElementById('location').innerHTML = '';
            }else{
                // Set content for the price box
                document.getElementById('price-content').innerHTML = content;
                // Set Location for the heading
                document.getElementById('location').innerHTML = serviceLocation;
            }
            $('#location,#price-content').animate({'opacity' : 1},1000);
            }
        });
    }
    
    $('#price-search').on('change',function(){
       loadPrices(this.value);
    });
</script>

@endsection