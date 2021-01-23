
@extends('admin.admin_index')

@section('dashboard')




<div class="main-panel">
    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Orders</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                        Time
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        <th>
                                                            Amount
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                                                    <tr>
                                                        <td class="font-weight-medium">
                                                            2020-01-02 07:32:33
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            On Process
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            91000
                                                        </td>
                                                    </tr>
                                                                                    <tr>
                                                        <td class="font-weight-medium">
                                                            2020-01-11 14:12:27
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            Cancel
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            93000
                                                        </td>
                                                    </tr>
                                                                                    <tr>
                                                        <td class="font-weight-medium">
                                                            2020-01-13 09:51:07
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            Placed
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            21500
                                                        </td>
                                                    </tr>
                                                                                    <tr>
                                                        <td class="font-weight-medium">
                                                            2020-01-06 12:05:30
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            Delivered
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            209998
                                                        </td>
                                                    </tr>
                                                                                    <tr>
                                                        <td class="font-weight-medium">
                                                            2020-01-07 16:29:16
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            Delivered
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            43999
                                                        </td>
                                                    </tr>
                                                                                    <tr>
                                                        <td class="font-weight-medium">
                                                            2020-01-11 16:56:54
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            Placed
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            79500
                                                        </td>
                                                    </tr>
                                                                                    <tr>
                                                        <td class="font-weight-medium">
                                                            2020-01-05 12:24:53
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            Delivered
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            205000
                                                        </td>
                                                    </tr>
                                                                                    <tr>
                                                        <td class="font-weight-medium">
                                                            2020-01-11 17:07:40
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            Delivered
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            71000
                                                        </td>
                                                    </tr>
                                                                                   
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