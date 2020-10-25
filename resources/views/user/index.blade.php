
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
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

            <!-- Custom stlylesheet -->
            <link type="text/css" rel="stylesheet" href="{{ asset ('css/style2.css')}}" />
            
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
                @include('user.top_nav')
                @include('user.nav')


                @include('user.slider')





                @include('user.product')

                @include('user.contact')


            
            </header>
            
        </body>

</html>
















