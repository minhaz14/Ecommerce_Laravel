
@extends('admin.admin_index') 

@section('catedit') 
    <div class="container">
    
        

            <div class="col-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Categories</h4>
                                    <form  action="{{route('category.edit')}}" class="forms-sample" method="post" id="cat_form">
                                        <input type="hidden" name="_token" value="F4ps472TR07olNPVwBDooUcvcsjwvKBpAGVPioIQ">

                                       @csrf
                                       
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter Category Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Category Type</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="Type" id="Type" placeholder="Enter Category Type">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    </form>
                                                    </div>
                            </div>
                        </div>
              
    
    
    </div>



@endsection
        