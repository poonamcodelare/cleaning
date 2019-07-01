@extends('layouts.master')

@section('title', "Locate Us" )

@section('header')

    <h2>Locate Us</h2>

@endsection

@section('content')

    <section class="locate-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                        <label for="locate_us">Select the city</label>
                        <select name="address-search" id="address-search" class="form-control">
                            @foreach ($locations as $location)
                                <option  value="{{$location->id}} "> {{$location->name}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <h2 id="location" class="text-center my-4" style="font-weight:600"></h2>

            <div class="locate-us-container">

               <div class="row " id="locate_us_content">
              
               </div>

            </div>

        </div>

    </section>

@endsection

@section('scripts')

<script>

    $(document).ready(function(){
        loadLocations();
        console.log('something');
    });

    function loadLocations(locationId = 1){

        $('#location,#locate_us_content').animate({'opacity' : 0},200);

        $.ajax({
            url : 'locate-us/' + locationId,
            type : 'GET',
            success : function(res){
                console.log(res);
                var content = '';
                res.forEach(location => {
                serviceLocation = location.location.name;
                   content += `
                        <div class="col-md-4 locate-us-box text-center">
                            <div class="col-md-10 offset-md-1 locate-content">
                                <div class="text-center locate-icon">
                                    <i class="fas fa-search-location" ></i>
                                </div>
                                <div class="locate-body" >                          
                                    ${location.address}
                                </div>
                                
                                <span class="pincode">${location.pincode}</span>
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
                    document.getElementById('locate_us_content').innerHTML = content_not_found;
                    document.getElementById('location').innerHTML = '';
                }else{
                    // Set content for the price box
                    document.getElementById('locate_us_content').innerHTML = content;

                    // Set Location for the heading
                    document.getElementById('location').innerHTML = serviceLocation;
                }
             $('#location,#locate_us_content').animate({'opacity' : 1},1000);
            }
        });
    }

    $('#address-search').on('change',function(){
       loadLocations(this.value);
    });

</script>

@endsection