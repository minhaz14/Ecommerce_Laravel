
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
                       @foreach ($pro as $pro) 
                            <div class="col-md-3">
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
                                        <p class="product-category">Computer</p>
                                        <h3 class="product-name"><a href="#">{{$pro->title}}</a></h3>
                                        <h4 class="product-price">{{$pro-> Discounted_Price}} <del class="product-old-price">{{$pro->price}}</del></h4>
                                        <!-- <div class="product-rating"> 
                                        </div> -->
                                        
                                    </div>
                                    <div class="add-to-cart">
                                        <a class="add-to-cart-btn" href="#"><i class="fa fa-shopping-cart"></i>Purchase</a>
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