
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


                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <img src="../uploads/products/15/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                        </td>

                                        <td>
                                        <a href="#" class="btn btn-warning">{{ $product->title }}</a>
                                        </td>

                                        <td>
                                        <a href="#"class="btn btn-danger">Delete</a>
                                        </td>

                                        <td>
                                            31500
                                        </td>

                                        <td>
                                            &lt;p&gt;Model - Canon PowerShot SX730 HS&lt;br /&gt;Resolution (MP) - 20.3 Mega pixels&lt;br /&gt;Display (Inch) - 3&quot; TFT Color LCD Display&lt;br /&gt;Optical Zoom (X) - 40x&lt;br /&gt;Battery - NB-13L Battery&lt;/p&gt;
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