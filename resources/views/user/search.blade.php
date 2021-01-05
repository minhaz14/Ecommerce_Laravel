

    
@extends('user.partials')

@section('search')
    



    

        <div class="section">
                <!-- container -->
            <div class="container">
                    <!-- row -->
                    <div class="row">

                        <!-- section title -->
                        <div class="col-md-12">
                            <div class="section-title">
                                <h3 class="title">Searched Products</h3>

                            </div>
                        </div>
                        <!-- /section title -->

                        <!-- Products tab & slick -->
                        <div class="col-md-12">
                            <div class="row">
                            @foreach ($produ as $pro) 
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
                                     


                                     {{$produ->links()}}
                                    <!-- <div class="clearfix">
                                       <a class="btn btn-primary justify-content-center" href="">Older Post &rarr;</a>
                                    </div> -->
                                    <!-- <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav> -->
                                
                                <!-- /product -->


                                <!-- /product -->
                            </div>
                        </div>
                            
                    </div>
                        <!-- /row -->
            </div>

        </div>

    @endsection