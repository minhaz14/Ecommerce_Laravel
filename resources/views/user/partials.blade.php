
<!DOCTYPE html>
<html lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <title>Bee Shop</title>

             <link rel="" href="{{ asset('img/log2.png')}}" /> 
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
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

            <!-- Custom stlylesheet -->
            <link type="text/css" rel="stylesheet" href="{{ asset ('css/style2.css')}}" />
            <link type="text/css" rel="stylesheet" href="{{ asset ('css/style.css')}}" />
            <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
            
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
        

            <header>
           

                @include('user.partials.top_nav')
                @include('user.partials.nav')
                @include('user.partials.category')

                @if(Session::has('success'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif


            
               
                @yield('index')

                @yield('search')
                @yield('show_category')

                @yield('carts')
                




                @include('user.partials.contact')


            
            </header>
            
        </body>

</html>

