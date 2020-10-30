
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
                       @foreach ($products as $product) 
                            <div class="col-md-3">
                                <div class="product">
                                    <div class="product-img">
                                    @php $i=1;  @endphp
                                    @foreach ($products->images as $image)
                                      @if($i>0)
                                        <img src="{{ asset('img/'.$image->image)}}" alt="">
                                      @endif
                                      @php $i--;  @endphp
                                    @endforeach()
                                        <div class="product-label">
                                            <span class="sale">Offer!!</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Computer</p>
                                        <h3 class="product-name"><a href="#">{{$products->title}}</a></h3>
                                        <h4 class="product-price">{{$products->price}} <del class="product-old-price">{{$products->Discounted_Price}}</del></h4>
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