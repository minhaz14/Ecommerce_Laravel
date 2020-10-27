

@extends('admin.admin_index')

@section('categories')



<div class="main-panel">
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Categories</h4>
                    <form class="forms-sample" method="post" id="cat_form">
                        <input type="hidden" name="_token" value="F4ps472TR07olNPVwBDooUcvcsjwvKBpAGVPioIQ">
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
                    <h4 class="card-title">Categories Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Type
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
                                                                <tr>
                                    <td>
                                        Smart Phone
                                    </td>
                                    <td>
                                        All smartphones
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/2" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/2" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        Headphone
                                    </td>
                                    <td>
                                        All headphones
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/3" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/3" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        Camera
                                    </td>
                                    <td>
                                        All cameras
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/4" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/4" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        Powerbank
                                    </td>
                                    <td>
                                        All powerbanks
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/5" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/5" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        Gaming
                                    </td>
                                    <td>
                                        All gaming accessories
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/6" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/6" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        Tab
                                    </td>
                                    <td>
                                        All tabs
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/7" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/7" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        Smartwatch
                                    </td>
                                    <td>
                                        All smartwatches
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/8" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/8" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        Speaker
                                    </td>
                                    <td>
                                        All speakers
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/9" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/9" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        Accessory
                                    </td>
                                    <td>
                                        All accessories
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2019-02-10 00:00:00
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/10" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/10" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        Computer
                                    </td>
                                    <td>
                                        PC, Laptop
                                    </td>
                                    <td>
                                        2019-02-09 00:00:00
                                    </td>
                                    <td>
                                        2020-10-15 10:31:05
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/edit/1" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/categories/delete/1" onclick="delete()" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
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