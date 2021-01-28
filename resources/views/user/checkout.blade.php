
    
@extends('user.partials')

@section('carts')

   
<div class="section">
    <div class='container'>
        <h3>confirm Item</h3>
        
        
        <table class="table table-bordred table-stripe">
            <tr>
                <th >#</th>
                <th >Product Title</th>
                
                <th >Product Quantity</th>
                <th >Unit Price</th>
                <th >Total Price</th>
                
                
            </tr>
             @php
               $total_price = 0;
             @endphp
            @foreach(App\Models\Cart::totalCarts() as $cart)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{ $cart->product->title }}</td>
                <td>{{ $cart->product_quantity }}</td>
               
               
                <td><b>{{ $cart->product->price }}</b> Taka</td>
                   @php
                      $total_price += $cart->product->price * $cart->product_quantity;
                    @endphp
                <td><b>{{ $cart->product->price * $cart->product_quantity }} </b> Taka</td>
               
            </tr>
            @endforeach
            <tr>
            <td colspan="3"></td>
            <td> Total Ammount:</td>
            <td><strong> {{ $total_price }} Taka</strong></td>
            </tr>
        </table>

        <div class="text-center">
          <a href="{{route('carts')}}" class="btn btn-warning ">Edit Cart Items.........</a>
          
        </div>
    </div>
 </div>



   
 <div class="section">
    <div class='container'>
        <h3>Shiping Address</h3>
        <form action="{{route('checkout.store')}}"   method="post" enctype="multipart/form-data">
             @csrf
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Reciever Name</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputname" placeholder="Name" name= "name" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-2 col-form-label">E-Mail Address</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="email" placeholder="Email" name= "email">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-8">
                <input type="tel" class="form-control" id="phone"  placeholder="Phone Number" name= "phone">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Shiping Address</label>
                <div class="col-sm-8">
                <textarea class="form-control" id="address" rows="3" name="address" ></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Aditional Message (Optional)</label>
                <div class="col-sm-8">
                <textarea class="form-control" id="address" rows="3" name="message" ></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Payment Method </label>
                <div class="col-sm-8">
                    <select class="form-control" id="exampleFormControlSelect1">
                            <option>Cash On Dalivery</option>
                            <option>paypal</option>
                            <option>Bikash</option>
                            <option>Rocket</option>
                            
                   </select>
                </div>
            </div>

            <div class="text-center">
            <button type="submit" class="btn btn-success mr-2">Order Naw</button>
          
            </div>

       </form>
      
        
         
    </div>
 </div>




@endsection