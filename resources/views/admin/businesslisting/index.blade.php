@extends('layouts.admin')
@section('content-admin')

    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Business Listing</h5>
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
                                            <th>Category</th>
                                            <th>Tag</th>
                                            <th>Pricing</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Listing 1</td>
                                            <td>category 1</td>
                                            <td>tag 1</td>
                                            <td>123</td>
                                            <td>Active</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, neque.</td>
                                        </tr>

                                        <tr>
                                            <td>Listing 1</td>
                                            <td>category 1</td>
                                            <td>tag 1</td>
                                            <td>123</td>
                                            <td>Active</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, neque.</td>
                                        </tr>

                                        <tr>
                                            <td>Listing 1</td>
                                            <td>category 1</td>
                                            <td>tag 1</td>
                                            <td>123</td>
                                            <td>Active</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, neque.</td>
                                        </tr>

                                        <tr>
                                            <td>Listing 1</td>
                                            <td>category 1</td>
                                            <td>tag 1</td>
                                            <td>123</td>
                                            <td>Active</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, neque.</td>
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
