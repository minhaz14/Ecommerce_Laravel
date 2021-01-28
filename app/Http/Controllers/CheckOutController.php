<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CheckOutController extends Controller
{
    public function index()
    {
        return view('user.checkout');
       
    }

    public function store(Request $request)
    {
       
       $order = new Order();
       $order->name=$request->name;
       $order->email=$request->email;
       $order->phone_no=$request->phone;
       $order->ip_address = request()->ip();
       $order->shipping_address=$request->address;
       $order->message=$request->message;
       $order->save(); 

       session()->flash('success','your order istaken !!!!please wait admin will soon confirm!!!');
       return redirect()->route('index');
       
    }


}
