<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;

class CartController extends Controller
{
    public function store(Request $request)
    {

        $cart =Cart::orWhere('ip_address',request()->ip())
        ->where ('product_id', $request ->product_id)
        ->first();

        if (!is_null($cart)){
            $cart->increment('product_quantity');
            return back(); 
        }else{
           
            $cart =new Cart();

            //    if (Auth::check()){
            //        $cart->user_id=Auth::id();
            //    }
                
               $cart->ip_address = request()->ip();
               $cart->product_id = $request ->product_id;
               $cart->save();
               session()->flash('success','product has added to the cart !!!');
               return back();

        }
      
    }

    public function index()
    {
        return view('user.carts');
       
    }

    public function update(Request $request, $id)
    {
         $carts=Cart::find($id);
         if(!is_null($carts)){
             $carts->product_quantity = $request->product_quantity;
             $carts->save();
         }else{
             return redirect()->route('cart');
         }
        session()->flash ('success','Product has updated successfully !!!');
        return back();
    }
    public function destroy( $id){
        $cart = Cart::find($id);
        $cart->delete();
        session()->flash ('success','Cart has deleted successfully !!!');
        return back();
    }

}
