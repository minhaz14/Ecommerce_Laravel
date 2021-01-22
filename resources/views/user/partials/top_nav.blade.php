

        <div id="top-header">
            <div class="container">
                <ul id="head_links" class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +000-00-00-00</a></li>
                    <li><a href="#"><i class="far fa-envelope"></i> Beeshop@gmail.com</a></li>
                    <li><a href="#"><i class="far fa-map-marker-alt"></i> Rampura, Road 4</a></li>
                </ul>
                    @if (Route::has('login'))
                    <ul class="header-links pull-right">
                        
                        @auth
                           
                           <!-- <li><a href="{{ url('/dashboard') }}"> <i class="far fa-user"> </i>{{ Auth::user()->name }}</a></li> -->
                            
                           <li class="sub-meno"><a href="{{ url('/') }}"></li>
                          
                                  
            
                           <li class="sub-meno">
                             <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                 <!-- {{ __('Profile') }} -->
                                 <i class="fas fa-user"></i>  {{Auth::user()->name}}
                             </x-jet-dropdown-link>                                                                                             
                           </li>
                           <li class="sub-meno"> <a href="">
                                   <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                       <i class="fas fa-sign-out-alt "></i> {{ __('Log out') }}
                                    </x-jet-dropdown-link>
                                    </form>
                                    </a>
                                    
                            </li> 
                              
                           


                            
                         @else
                            <li><a href="{{ route('login') }}"><i class="far fa-user"></i> Login</a></li>

                            @if (Route::has('register'))
                             <li><a href="{{ route('register') }}"><i class="far fa-user"></i> SignUp</a> </li>
                            @endif
                         @endif                  
                    </ul>
                    @endif  
                











            </div>
        </div>
           
<!-- 
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Loginmmmm</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Revvgister</a>
                        @endif
                    @endif
                </div>
            @endif  -->