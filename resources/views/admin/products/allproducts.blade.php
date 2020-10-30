
@extends('admin.admin_index') 

@section('allproducts') 

<div class="main-panel">
 <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products Table <a class="btn btn-lg btn-success" style="float:right;color:white" href="{{route('add_products')}}">+ Add Product</a></h4>
                    <br><br>
                    @include ('admin.partials.sessionMessage')
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Images
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    
                                    <th>
                                        Update
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($prod as $prod) 
                                    <tr>
                                        <td>
                                        @php $i=1;  @endphp
                                        @foreach($prod->images as $image)
                                            @if($i>0)

                                            <img src=" {{asset('img/'.$image->image)}}" style="width:60px;height:60px;border-radius:10%;" alt="">
                                            @endif
                                            @php $i--;  @endphp
                                        @endforeach

                                        </td>

                                        <td>
                                        <a href="#" class="btn btn-warning">{{$prod->title}}</a>
                                        </td>

                                        <td>
                                        {{ csrf_field() }}
                                        <a href="{{route('product.destroy',$prod->id)}}"class="btn btn-danger">Delete</a>
                                        </td>

                                        <td>
                                          {{$prod->Discounted_Price}}
                                        </td>

                                        <td>
                                         {{$prod->description}}
                                        </td>

                                        <td>
                                            Camera
                                        </td>
                                        
                                        <td>
                                        <a href="#" class="btn btn-warning">Edit</a> 
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection