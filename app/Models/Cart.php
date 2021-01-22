<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;


use Request;

class Cart extends Model
{
    public function user()
  {
      return $this-> belongsTo(User::class);
  }
  public function order()
  {
      return $this-> belongsTo(Order::class);
  }
  public function product()
  {
      return $this-> belongsTo(Product::class);
  }
    //show number of items in cart in nav bar
  public static function totalItems(){
      $carts= Cart::orWhere('ip_address',request()->ip())->get();
      $total_item=0;
      foreach($carts as $cart){
          $total_item +=$cart->product_quantity ;
      }
      return $total_item;

    }
   //show products in carts page 
    public static function totalCarts(){
        $carts= Cart::orWhere('ip_address',request()->ip())->get();
        $total_item=0;
        
        return $carts;
  
      }



     
      
          
    
}
