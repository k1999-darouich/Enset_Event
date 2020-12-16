<nav class="navbar navbar-expand-md navbar-light fixed-top">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="\images\logo.jpg"  width="45%" style="margin-top: -7%; margin-bottom: -7%;">
                </a>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <button class="btn btn-primary">Inscription</button>
                                    </a>
                                </li>
                            @endif
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <button class="btn btn-primary ">Connexion</button>
                                    </a>
                                </li>
                            @endif
                        @else
                        
                      <li class="nav-item active mr-5 ">
                        <a class="nav-link " href="#"><i class="fas fa-home " style="font-size: large;"></i> </a>
                      </li>
                      <li class="nav-item mr-5">
                        <a class="nav-link" href="/profile/event"><i class="fas fa-user" style="font-size: large;"></i></a>
                      </li>
                      <li class="nav-item mr-5 ">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name}} {{Auth::user()->last_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="#"
                                      >
                                        {{ __('Profile') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
