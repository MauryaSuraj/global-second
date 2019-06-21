@extends('layouts.admin')
@section('content-admin')

    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>New Products</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                        <li><i class="feather icon-trash close-card"></i></li>
                                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block p-b-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Product Code</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Rating</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Sofa</td>
                                            <td>#PHD001</td>
                                            <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee8f8c8dae89838f8782c08d8183">[email&#160;protected]</a></td>
                                            <td><label class="label label-danger">Out Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Computer</td>
                                            <td>#PHD002</td>
                                            <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e3d3a3d1e39333f3732703d3133">[email&#160;protected]</a></td>
                                            <td><label class="label label-success">In Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mobile</td>
                                            <td>#PHD003</td>
                                            <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e898999aa88f85898184c68b8785">[email&#160;protected]</a></td>
                                            <td><label class="label label-danger">Out Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Coat</td>
                                            <td>#PHD004</td>
                                            <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7c5c4d4e7c0cac6cecb89c4c8ca">[email&#160;protected]</a></td>
                                            <td><label class="label label-success">In Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Watch</td>
                                            <td>#PHD005</td>
                                            <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6605020526010b070f0a4805090b">[email&#160;protected]</a></td>
                                            <td><label class="label label-success">In Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shoes</td>
                                            <td>#PHD006</td>
                                            <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1666676456717b777f7a3875797b">[email&#160;protected]</a></td>
                                            <td><label class="label label-danger">Out Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
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
    </div>

@endsection
