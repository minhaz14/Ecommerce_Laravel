

@extends('admin.admin_index')

@section('categories')



<div class="main-panel">
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Categories</h4>
                    <form  action="{{route('admin.category.store')}}" class="forms-sample" method="post" id="cat_form">
                        <input type="hidden" name="_token" value="F4ps472TR07olNPVwBDooUcvcsjwvKBpAGVPioIQ">


                        {{ csrf_field() }}
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
        
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                @include ('admin.partials.sessionMessage')
                    <h4 class="card-title">Categories Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr> 
                                   <th>
                                      ID
                                   </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Created At
                                    </th>
                                    <th>
                                        Updated At
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Update
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                               @foreach ($catg as $catg) 

                                 <tr>
                                    <td>{{$catg->id}}</td>
                                    <td>{{$catg->name}}</td>
                                    <td>{{$catg->CategoryType}}</td>
                                    <td>{{$catg->description}}</td>
                                    <td>{{$catg->created_at}}</td>
                                    <td> {{$catg->updated_at}}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('category.destroy',$catg->id)}}" onclick="delete()" class="btn btn-danger">Delete</a>
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
</div>

@endsection