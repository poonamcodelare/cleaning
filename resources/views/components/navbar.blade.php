
<nav class="navbar navbar-expand-lg text-dark bottom-shadow">
        

        
    <div class="container">
        
            <a href="#" class="navbar-brand logo">LOGO</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapseContainer">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse " id="navbarCollapseContainer">
               
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                               Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact-us" class="nav-link">
                                Be a franchise
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/about-us" class="nav-link">
                               About us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/prices" class="nav-link">
                               Price list
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/locate-us" class="nav-link">
                               Locate us
                        </a>
                    </li>
                
                    {{-- <li class="nav-item">
                        <a href="/blog" class="nav-link">
                               Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/donate" class="nav-link">
                               Donate
                        </a>
                    </li> --}}
                    @if(auth()->check())                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Hi, {{explode(' ',auth()->user()->name)[0]}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profile">Profile</a>
                                <a class="dropdown-item" href="#">Setting</a>
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
                            <a href="/login" class="nav-link">
                                Sign In
                            </a>
                        </li>
                    @endif

                    <li class="nav-item link-highlight">
                        <button class="nav-link" data-toggle="modal" data-target="#myModal">
                            Book Service
                        </button>
                    </li>
                   
                </ul>
            </div>
    </div>
    
</nav>