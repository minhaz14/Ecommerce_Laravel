

    
@extends('user.partials')

@section('carts')
    
 <div class="section">
    <div class='container'>
        <h3>My Cart Items</h3>
        
        
        <table class="table table-bordred table-stripe">
            <tr>
                <th >#</th>
                <th >Product Title</th>
                <th >Product Image</th>
                <th >Product Quantity</th>
                <th >Unit Price</th>
                <th >Total Price</th>
                <th >Delete</th>
                
            </tr>
             @php
               $total_price = 0;
             @endphp
            @foreach(App\Models\Cart::totalCarts() as $cart)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{ $cart->product->title }}</td>
                <td>
                @php $i=1;  @endphp
                    @foreach($cart->product->images as $image)
                    @if($i>0)

                     <img src=" {{asset('img/'.$image->image)}}" style="height:50px;border-radius:10%;" alt="">
                    @endif
                    @php $i--;  @endphp
                @endforeach

                </td>
                <td>
                    <form class="form-inline" action="{{ route('carts.update',$cart->id) }}" method="post">
                        @csrf
                        <input type="number" name="product_quantity" class="form-comtrol" value="{{ $cart->product_quantity }}">
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                    </form>
                </td>
                <td><b>{{ $cart->product->price }}</b> Taka</td>
                   @php
                      $total_price += $cart->product->price * $cart->product_quantity;
                    @endphp
                <td><b>{{ $cart->product->price * $cart->product_quantity }} </b> Taka</td>
                <td>
                    <form class="form-inline" action="{{ route('carts.delete',$cart->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="cart_id" class="form-comtrol">
                        <button type="submit" class="btn btn-danger btn-sm">delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
            <tr>
            <td colspan="4"></td>
            <td> Total Ammount:</td>
            <td><strong> {{ $total_price }} Taka</strong></td>
            </tr>
        </table>

        <div class="text-right">
          <a href="{{route('index')}}" class="btn btn-info btn-lg">Continue Shoping...</a>
          <a href="{{route('checkout')}}" class="btn btn-warning btn-lg">Checkout</a>
        </div>
    </div>
 </div>





@endsection