<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    public function index()
    {
      
        $products =Product::orderBy('id', 'desc')->get();
      // return view('user.product')->with('products',$products);
       return view('user.index',compact('products'));

      // return response()->json($pro);
      
       // return view('user.index');
    }


    public function bal()
    {
       return view('bal');
    }

   

}
