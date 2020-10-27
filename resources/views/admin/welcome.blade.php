<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Star Admin Dashboard</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/vendors/css/vendor.bundle.addons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="https://laravel-ecommerce-eshop.herokuapp.com/css/style.css">
        <!-- endinject -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="https://laravel-ecommerce-eshop.herokuapp.com/favicon.png" />
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                    <a class="navbar-brand brand-logo" href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel">
                        <div style="color: #007bff;">Electro</div>
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel">
                        <div style="color: #007bff;">Electro</div>
                    </a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-xl-inline-block">
                            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <span class="profile-text">Electro</span>
                                <img class="img-xs rounded-circle" src="https://laravel-ecommerce-eshop.herokuapp.com/images/faces/face1.jpg" alt="Profile image">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <br>
                                <br>
                                <a class="dropdown-item" href="https://laravel-ecommerce-eshop.herokuapp.com/admin/logout">
                                    Sign Out
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->

            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <div class="nav-link">
                                <div class="user-wrapper">
                                    <div class="profile-image">
                                        <img src="https://laravel-ecommerce-eshop.herokuapp.com/images/faces/face1.jpg" alt="profile image">
                                    </div>
                                    <div class="text-wrapper">
                                        <p class="profile-name">Electro</p>
                                        <div>
                                            <small class="designation text-muted">Admin</small>
                                            <span class="status-indicator online"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel">
                                <i class="menu-icon mdi mdi-television"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <i class="menu-icon mdi mdi-cart-outline"></i>
                                <span class="menu-title">Products</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories">
                                <i class="menu-icon mdi mdi-view-grid"></i>
                                <span class="menu-title">Categories</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/management">
                                <i class="menu-icon mdi mdi-content-paste"></i>
                                <span class="menu-title">Order Management</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- middle pannellllllllllllllllllllllllllllll -->


               <!-- @include('admin.products.dashboard')-->
               <!-- @include('admin.products.allproducts') -->

               <!-- @include('admin.products.categories') -->
               @include('admin.products.order_management') 


               <!-- @yield('allproducts') -->

               

               






            

            </div>
        <!-- plugins:js -->
        <script src="https://laravel-ecommerce-eshop.herokuapp.com/vendors/js/vendor.bundle.base.js"></script>
        <script src="https://laravel-ecommerce-eshop.herokuapp.com/vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/off-canvas.js"></script>
        <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/misc.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->

        <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/dashboard.js"></script>
        <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/chart.js"></script>
        
        <!--    Jquery Validation-->
        <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/lib/jquery.js"></script>
        <script src="https://laravel-ecommerce-eshop.herokuapp.com/js/dist/jquery.validate.js"></script>
        <!-- End custom js for this page-->
    </body>

</html>
