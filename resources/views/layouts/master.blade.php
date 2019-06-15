<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    {{-- <link rel="stylesheet" href=" {{asset('css/app.css')}} "> --}}
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/owl.theme.default.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/style.css')}} ">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap-multiselect.css')}}">
</head>
<body>

        @include('components.navbar')
        
          <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Select Services</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/book-service" method="POST" id="service_form">
                        @csrf
                        <div class="form-group">
                            <label for="services">Select Services </label>
                            <select name="services[]" id="services" class="form-control" multiple="multiple">
                                    
                                @foreach ($cached_services as $service)
                                    <option value="1">{{$service}}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="form-group">
                            <label for="city">City</label>
                            <select name="city" id="city" class="form-control">
                                <option value="">Select City</option>
                                <option value="1">alwar</option>
                                <option value="2">gurgoan</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select name="location" id="location" class="form-control">
                                <option value="">Select Location</option>
                                <option value="1">alwar</option>
                                <option value="2">gurgoan</option>
                            </select>
                        </div>
    
                    </form>
                </div>
            
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" form="service_form" class="btn btn-primary" >Submit</button>
                    <button  class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            
                </div>
            </div>
        </div>
    
            @section('content')
                
            @show


            
            {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src=" {{asset('js/owl.carousel.min.js')}} "></script>
            <script src="{{asset('js/bootstrap-multiselect.js')}}"></script>
            {{-- <script src=" {{asset('js/app.js')}} "></script> --}}
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#services').multiselect();
                });
            </script>
            @section('scripts')
            @show
            
        @include('components.footer')
</body>
</html>