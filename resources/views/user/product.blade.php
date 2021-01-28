
<div class="section">
    
        <!-- container -->
    <div class="container">
    
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>
                      
                    </div>
                </div>
                <!-- /section title -->
              

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                       
                       @foreach(App\Models\Product::orderBy('id','desc') -> get() as $pro)
                            <div class="col-md-2">
                                <div class="product">
                                    <div class="product-img">
                                    @php $i=1;  @endphp
                                        @foreach($pro->images as $image)
                                            @if($i>0)
                                            <img src="{{asset('img/'.$image->image)}}" alt="">
                                            @endif
                                            @php $i--;  @endphp
                                        @endforeach
                                     
                                        <div class="product-label">
                                            <span class="sale">Offer!!</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">{{ $pro->category->name}}</p>
                                        <h3 class="product-name"><a href="#">{{$pro->title}}</a></h3>
                                        <h4 class="product-price">{{$pro-> Discounted_Price}} <del class="product-old-price">{{$pro->price}}</del></h4>
                                        <!-- <div class="product-rating"> 
                                        </div> -->
                                        
                                    </div>
                                    <div class="add-to-cart">
                                           <form action="{{ route('carts.store') }}"  method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $pro->id }}">
                                                 <!-- <a type="submit" class="add-to-cart-btn" ><i class="fa fa-shopping-cart"></i>Add To Cart</a>  -->
                                                <button type="submit" class="add-to-cart-btn " name="button"><i class="fa fa-shopping-cart"></i>add</button>
                                           </form>
                                    
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach  
                           
                        <!-- /product -->


                        <!-- /product -->
                    </div>
                </div>
                    
            </div>
                <!-- /row -->
     </div>

</div>