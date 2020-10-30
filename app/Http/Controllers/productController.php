<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public function show_products()
    // {
    //    $pro =Product::orderBy('id', 'desc')->get();
    //   // return view('user.product')->with('products',$products);
    //    return view('bal',compact('pro'));

    //   // return response()->json($pro);
    // }


   

    public function destroy_products($id) {
        $product = Product::find($id);
        $product->delete();
        session()->flash ('success','Product has deleted successfully !!!');
        return back();
        // return view("pages.products.show")
        //     ->with("product", $product);
    }


}
