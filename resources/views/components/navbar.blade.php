<nav class="navbar navbar-expand-lg text-dark bottom-shadow">
        

        
    <div class="container">
        
            <a href="{{url('/')}}" class="navbar-brand logo">TajOutlet</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapseContainer">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse " id="navbarCollapseContainer">
               
                <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link">
                               Home
                        </a>
                    </li>

                    <!-- Start  -->
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               service
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('dry-clining')}}">Dry-Clining</a>
                                <!-- <a class="dropdown-item" href="#">Setting</a> -->
                                 
                            </div>
                        </li>
                    <!-- End -->
                   
                    <li class="nav-item">
                        <a href="{{url('/contact-us')}}" class="nav-link">
                                Be a franchise
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/about-us')}}" class="nav-link">
                               About us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/prices')}}" class="nav-link">
                               Price list
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/locate-us')}}" class="nav-link">
                               Locate us
                        </a>
                    </li>
                 <!--    <li class="nav-item">
                        <a href="{{url('/mygallery')}}" class="nav-link">
                        Gallery
                       </a>
                    </li> -->
                
                    {{-- <li class="nav-item">
                        <a href="{{url('/blog')}}" class="nav-link">
                               Blog
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/donate')}}" class="nav-link">
                               Donate
                        </a>
                    </li> --}}
                    @if(auth()->check())                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Hi, {{explode(' ',auth()->user()->name)[0]}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/profile')}}">Profile</a>
                                <!-- <a class="dropdown-item" href="#">Setting</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout" 
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> Logout </a>
                                    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{url('/login')}}" class="nav-link">
                                Sign In
                            </a>
                        </li>
                    @endif

                   <!--  <li class="nav-item link-highlight">
                       
                        <a href="{{url('orders')}}" class="nav-link btn btn-success text-light">
                        Order
                       </a>
                   
                    </li>
 -->

                   
                </ul>
            </div>
    </div>
    
</nav>