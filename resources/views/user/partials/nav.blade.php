
 
 <!-- MAIN HEADER -->
 <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                   
                                <!-- <img src="{{ asset ('/img/logo.png')}}" alt=""> -->
                                <a class="logospan" href="">Bee<span>Shop</span></a>
                     
                    <!-- /LOGO -->





                    <!-- SEARCH BAR -->
                    
                        <div class="col-md-6">
                            <div class="header-search">
                                <form action="{{ route('search') }}" method="get">
                                {{ csrf_field() }}
                                    <div class="custom_search_top" >
                                        <input class="input" style="border-radius: 40px 0px 0px 40px;" name="search" placeholder="Search here">
                                        <button  class="search-btn">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                     

                    <!-- /SEARCH BAR -->








                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Cart -->
                            <div  class="dropdown">
                                <a class="dropdown-toggle " id="custom_shopping_cart" href="{{ route('carts') }}">
                                    <i class="fa fa-shopping-cart"><span class="badge badge-danger">{{ App\Models\Cart::totalItems() }}</span></i>
                                    <span>Your Cart</span>
                                </a>

                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle pull-right">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
    </div>
        <!-- /MAIN HEADER -->

 
 
 
 
 
 
 
 
 
