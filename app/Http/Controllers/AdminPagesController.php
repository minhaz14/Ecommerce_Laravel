<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function adminPages()
    {
       return view('admin.admin_index');
    }


     

    public function welcome()
    {
       return view('admin.welcome');
    }



    

    public function all_products()
    {
       return view('admin.products.allproducts');
    }

    public function categories()
    {
       return view('admin.products.categories');
    }

    public function dashboard()
    {
       return view('admin.products.dashboard');
    }

    public function ordermanagement()
    {
       return view('admin.products.order_management');
    }

}
