<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro</title>

    <link rel="shortcut icon" href="https://laravel-ecommerce-eshop.herokuapp.com/favicon.png" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/css/style2.css" />
    
    <!-- JQuery and Validator Plugins -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    <style>
        @media  only screen and (max-width: 767px){
            #head_links {
                visibility: hidden;
            }
            .custom_search_top {
                text-align:center;
            }

            .header-ctn {
                width: 100%;
            }
        }
        </style>

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul id="head_links" class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +000-00-00-00</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> support@electro.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Banani, Road 11</a></li>
                </ul>
                <ul class="header-links pull-right">
                                        <li><a href="https://laravel-ecommerce-eshop.herokuapp.com/login"><i class="fa fa-user-o"></i> Login</a></li>
                    
                    <li><a href="https://laravel-ecommerce-eshop.herokuapp.com/signup"><i class="fa fa-user-o"></i> SignUp</a></li>
                                        
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="https://laravel-ecommerce-eshop.herokuapp.com" class="logo">
                                <img src="https://laravel-ecommerce-eshop.herokuapp.com/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="https://laravel-ecommerce-eshop.herokuapp.com/search" method="get">
                                <div class="custom_search_top" >
                                    <input class="input" style="border-radius: 40px 0px 0px 40px;" name="n" placeholder="Search here">
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
                                <a class="dropdown-toggle " id="custom_shopping_cart" href="https://laravel-ecommerce-eshop.herokuapp.com/cart">
                                    <i class="fa fa-shopping-cart"></i>
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
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="https://laravel-ecommerce-eshop.herokuapp.com">Home</a></li>
                                                                    <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=2" >Smart Phone</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=3" >Headphone</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=4" >Camera</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=5" >Powerbank</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=6" >Gaming</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=7" >Tab</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=8" >Smartwatch</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=9" >Speaker</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=10" >Accessory</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search?c=1" >Computer</a></li>
                                                <li ><a href="https://laravel-ecommerce-eshop.herokuapp.com/search">Browse All</a></li>
                                        
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
                        <div class="row">
                <!-- shop -->
                                                                 <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop01.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Smart Phone</h3>
                            <a href="search?c=2" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
                                                 <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop02.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Headphone</h3>
                            <a href="search?c=3" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
                                                 <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop03.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Camera</h3>
                            <a href="search?c=4" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
                                             </div>
                        <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- SECTION -->


       <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">


                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/15/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Camera</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/15">Canon PowerShot SX730</a></h3>
                                    <h4 class="product-price">TK 30000 <del class="product-old-price">TK 31500</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/15"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/18/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Powerbank</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/18">ADATA 20100 mAh</a></h3>
                                    <h4 class="product-price">TK 1999 <del class="product-old-price">TK 2500</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/18"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/1/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Computer</p>
                                    <h3 class="product-name"><a href="">Apple MacBook Pro (2018)</a></h3>
                                    <h4 class="product-price">TK 205000 <del class="product-old-price">TK 214200</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href=""><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/3/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Computer</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/3">HP Probook X360 440 G1</a></h3>
                                    <h4 class="product-price">TK 91000 <del class="product-old-price">TK 94920</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/3"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/5/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Smart Phone</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/5">Google Pixel 3 (64 GB)</a></h3>
                                    <h4 class="product-price">TK 71000 <del class="product-old-price">TK 71900</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/5"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/11/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Camera</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/11">Canon EOS 6D Mark II</a></h3>
                                    <h4 class="product-price">TK 101000 <del class="product-old-price">TK 105530</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/11"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/19/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Powerbank</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/19">Joyroom ZHI 10000 mAh</a></h3>
                                    <h4 class="product-price">TK 2999 <del class="product-old-price">TK 3300</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/19"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/20/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Powerbank</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/20">Astrum 10000mAh</a></h3>
                                    <h4 class="product-price">TK 1500 <del class="product-old-price">TK 1500</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/20"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/21/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Powerbank</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/21">Mi 10000 mAh v2</a></h3>
                                    <h4 class="product-price">TK 1199 <del class="product-old-price">TK 1300</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/21"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/22/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Smartwatch</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/22">Apple Watch Series 4</a></h3>
                                    <h4 class="product-price">TK 43999 <del class="product-old-price">TK 44300</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/22"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/23/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Smartwatch</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/23">Mi Amazfit Bip</a></h3>
                                    <h4 class="product-price">TK 5999 <del class="product-old-price">TK 6100</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/23"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/24/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Smartwatch</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/24">Garmin fenix 5 Sapphire</a></h3>
                                    <h4 class="product-price">TK 43000 <del class="product-old-price">TK 45000</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/24"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/25/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Speaker</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/25">Beats PILL Plus</a></h3>
                                    <h4 class="product-price">TK 20000 <del class="product-old-price">TK 21000</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/25"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/26/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Speaker</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/26">JBL Omni 50+</a></h3>
                                    <h4 class="product-price">TK 45000 <del class="product-old-price">TK 46730</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/26"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/27/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Speaker</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/27">Edifier S350DB 2.1</a></h3>
                                    <h4 class="product-price">TK 30000 <del class="product-old-price">TK 31500</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/27"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/28/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Speaker</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/28">JBL Xtreme 2 Portable</a></h3>
                                    <h4 class="product-price">TK 24000 <del class="product-old-price">TK 25400</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/28"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/30/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Accessory</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/30">APPLE Magic Mouse 2</a></h3>
                                    <h4 class="product-price">TK 11000 <del class="product-old-price">TK 11050</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/30"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/31/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Accessory</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/31">Rapoo 3600 Silent</a></h3>
                                    <h4 class="product-price">TK 999 <del class="product-old-price">TK 1050</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/31"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/34/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Accessory</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/34">Corsair STRAFE Mechanical</a></h3>
                                    <h4 class="product-price">TK 10500 <del class="product-old-price">TK 11000</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/34"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/35/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Accessory</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/35">APPLE MAGIC KEYBOARD</a></h3>
                                    <h4 class="product-price">TK 9500 <del class="product-old-price">TK 9700</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/35"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/36/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Computer</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/36">MSI GT75VR 7RE TITAN</a></h3>
                                    <h4 class="product-price">TK 245000 <del class="product-old-price">TK 254630</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/36"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/37/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Computer</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/37">Asus ROG G752VS(KBL)</a></h3>
                                    <h4 class="product-price">TK 224000 <del class="product-old-price">TK 231420</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/37"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/38/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Tab</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/38">Microsoft Surface Pro</a></h3>
                                    <h4 class="product-price">TK 195000 <del class="product-old-price">TK 202650</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/38"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/39/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Computer</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/39">HP Spectre 13-V113TU</a></h3>
                                    <h4 class="product-price">TK 123000 <del class="product-old-price">TK 126300</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/39"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/40/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Computer</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/40">Asus GL503VM Core i7</a></h3>
                                    <h4 class="product-price">TK 154500 <del class="product-old-price">TK 157920</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/40"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/42/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Headphone</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/42">Skullcandy Over-Ear</a></h3>
                                    <h4 class="product-price">TK 13900 <del class="product-old-price">TK 14000</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/42"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/44/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Gaming</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/44">DualShock 4 Wireless</a></h3>
                                    <h4 class="product-price">TK 3500 <del class="product-old-price">TK 3699</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/44"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/45/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Tab</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/45">Huawei MediaPad T3</a></h3>
                                    <h4 class="product-price">TK 18900 <del class="product-old-price">TK 19900</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/45"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/41/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Smart Phone</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/41">asus zenfone 5z</a></h3>
                                    <h4 class="product-price">TK 48000 <del class="product-old-price">TK 49000</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/41"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/2/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Accessory</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/2">Belt</a></h3>
                                    <h4 class="product-price">TK 900 <del class="product-old-price">TK 1000</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/2"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/4/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Accessory</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/4">test Belt</a></h3>
                                    <h4 class="product-price">TK 900 <del class="product-old-price">TK 1000</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/4"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/6/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Accessory</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/6">test Belt</a></h3>
                                    <h4 class="product-price">TK 900 <del class="product-old-price">TK 1000</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/6"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                                <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/7/1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Accessory</p>
                                    <h3 class="product-name"><a href="https://laravel-ecommerce-eshop.herokuapp.com/view/7">test Belt</a></h3>
                                    <h4 class="product-price">TK 900 <del class="product-old-price">TK 1000</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="https://laravel-ecommerce-eshop.herokuapp.com/view/7"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                                            </div>
                    
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </div>

    <!-- /SECTION -->
    
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <footer id="footer" >
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row" >
                    <div class="col-md-3 col-xs-6" >
                        <div class="footer" >
                            <h3 class="footer-title">About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut.</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categories</h3>
                            <ul class="footer-links">
                                <li><a href="#">Hot deals</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Smartphones</a></li>
                                <li><a href="#">Cameras</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Service</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->


    <!-- jQuery Plugins -->
    <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/jquery.min.js"></script>
    <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/bootstrap.min.js"></script>
    <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/slick.min.js"></script>
    <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/nouislider.min.js"></script>
    <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/jquery.zoom.min.js"></script>
    <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/main.js"></script>
    <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/lib/jquery.js"></script>
    <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/dist/jquery.validate.js"></script>
    
    

</body>

</html>
