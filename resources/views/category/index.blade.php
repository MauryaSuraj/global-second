@extends('layouts.admin')
@section('content-admin')

    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Category  </h5>
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
                                            <th>Category Id</th>
                                            <th>Category  Name </th>
                                            <th>Category Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>category 1</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>category 2</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>category 3</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>category 4</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
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
