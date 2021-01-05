<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class PagesController extends Controller
{
    public function index()
    {
      
        // $pro =Product::orderBy('id', 'desc')->get();
        // return view('user.index',compact('pro'));
        // $cate =Category::orderBy('id', 'desc')->get();
      // return view('user.product')->with('products',$products);
      //  return view('user.partials',compact('cate'));

      // return response()->json($pro);
       
        return view('user.index');
       
      // return view('user.index',compact('cate'));

    }


    public function dashboar()
    {
       return view('dashboard');
    }
    


    // ......................................search product in user page.....................................................................
    public function search(Request $request){
      $search =$request->search;

      $produ = Product::orWhere('title','like','%'.$search.'%')
      ->orWhere('description','like','%'.$search.'%')
      ->orWhere('price','like','%'.$search.'%')
      ->orWhere('slug','like','%'.$search.'%')
      ->orderBy('id','desc')
      ->paginate(4);
      //->get();

      return view ('user.search', compact('produ'));
      // return response()->json($produ);
       //return view ('pages.product.search')->withDetails('products')->withQuery ( $search );

      //  return view ('pages.product.search')->withProducts($products);



     }

    //  ...............category wise product show in iser page.....................
    public function show($id)
    {  
      $produ = Category::find($id);
       return view('user.Show_category', compact('produ'));
      //  return response()->json($produ);
    }

}
