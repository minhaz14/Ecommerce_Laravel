<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


use App\Models\ProductImage;
use Image;


class AdminPagesController extends Controller
{
    public function adminPages()
    {
       return view('admin.products.dashboard');
    }


    public function all_products()
    {
      $prod =Product::orderBy('id', 'desc')->get();
       return view('admin.products.allproducts',compact('prod'));
       //return view('user.index',compact('prod'));
       //return response()->json($prod);
    }

    public function add_products()
    {
       return view('admin.products.add_product');
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


    public function product_store(Request $request)
    {
        
      //   $request->validate([
      //       'title' => 'required|max:255',
      //      // 'description' => 'required',
      //       'price' => 'required|numeric',
      //       'quantity' => 'required|numeric',
        
      //   ]);


        $product=new Product;
        $product->title=$request->Name;
        $product->description=$request->Description;
        $product->price=$request->Price;
        $product->Discounted_Price=$request->Discounted_Price;
        $product->quantity=$request->quantity;
        $product->slug=$request->slug;

        
        $product->category_id=1;
        $product->brand_id=1;
        $product->admin_id=1;
        $product->save();

        ///product image insert

        if($request->hasFile('product_image')){
            //inert that image
            $image=$request->file('product_image');
            $img=time() .'.'. $image->getClientOriginalExtension();
            
            $location=public_path('img/' .$img);
            Image::make($image)->save ($location);

            $product_image=new ProductImage;
            $product_image->product_id=$product->id;
            $product_image->image=$img;
            $product_image->save();

        }       
        return redirect()->route ('add_products');
    }



}
