
@extends('admin.admin_index') 

@section('addproducts') 







<div class="main-panel">
               
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a style="color:green;" href="{{route('all_products')}}">< Back to List</a>
                                        <br>
                                        <br>
                                        <h2 >Create product</h2>
                                        <!-- <br>
                                        <img  id="imageHolder" src="" alt="add image" height="300" width="300"/>
                                        <br>
                                        <input  type="file" name="inp_files" id="inp_files" multiple="multiple" >
                                        <br>
                                        <div id="empty_image"> </div>-->
                                        <form action="{{route('admin.product.store')}}"   method="post" enctype="multipart/form-data">
                                            <!-- <input type="hidden" name="_token" value="uhX4Wu6cyZct09B51Ytxc8GLqnmGnJjLvKYwsj3X">
                                        
                                        
                                            <input id="inp_img" name="img" type="hidden" value="">
                                            <br><br>
                                            <div id="for_extension_error"></div>  -->


                                            {{ csrf_field() }}



                                            <div class="form-group">
                                                <label  >Product Name*</label>
                                                <input type="text" class="form-control" id="Name" placeholder="Product Name"  name="Name"  value="">
                                            </div>


                                            <!-- <div class="form-group">
                                                <label for="exampleFormControlInput1">Product Image</label>
                                                <input type="file" class="form-control" name= "product_image" id="product_image" >
                                            </div> -->




                                            <div class="form-group">
                                                <label  for="Description">Product Description*</label>
                                                <textarea type="textarea" class="form-control" id="Description"   placeholder="Description" name="Description"></textarea>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label  for="Category">Category*</label>
                                                <select class="form-control form-control-md" id="Category" name="Category">
                                                <option value=2 >Smart Phone </option><option value=3 >Headphone </option><option value=4 >Camera </option><option value=5 >Powerbank </option><option value=6 >Gaming </option><option value=7 >Tab </option><option value=8 >Smartwatch </option><option value=9 >Speaker </option><option value=10 >Accessory </option><option value=1 >Computer </option>                                            </select>
                                            </div> -->
                                            <div class="form-group">
                                                <label  >Product Price*</label>
                                                <input type="text" class="form-control" name="Price" id="Price" value="" placeholder="12345">
                                            </div>

                                        
                                            <div class="form-group">
                                                <label  >Product Discounted Price*</label>
                                                <input type="text" class="form-control" id="Discounted_Price"  name="Discounted_Price" value=""placeholder="123454">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Quantity</label>
                                                <input type="number" class="form-control" name= "quantity"placeholder="0" id="exampleFormControlInput1" >
                                            </div>

                                            <div class="form-group">
                                                <label  >Slug</label>
                                                <input type="text" class="form-control" id="Name" placeholder="Product Name"  name="slug"  value=""placeholder="slug">
                                            </div>
                                            
                                            <!-- <div class="form-group ">
                                                <label  >Product Colors*</label>
                                                
                                                <input type="color" id="picker" class="form-control col-md-2">
                                                <br>
                                                <a onclick="addColor()" class="btn btn-sm btn-primary" >add</a>
                                                <br>
                                                <br>
                                                <div id="colors" style="border:1px solid #eee"> 
                                                </div>  
                                                <br>            
                                                <input type="text" class="form-control" id="color_list" name="Colors" value="" hidden>
                                            </div> -->
                                            
                                            <!-- <div class="form-group">
                                                <label >Product Tags*</label>
                                                <input type="text" class="form-control" id="Tags" name="Tags" value="">
                                            </div> -->
                                            <input type="submit" name="saveButton" class="btn btn-success mr-2" id="saveButton" value="Create"  />
                                        </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection