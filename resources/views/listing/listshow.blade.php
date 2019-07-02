@extends('layouts.user')
@section('content')

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
                                <h5>Listing By You  </h5>
                            </div>
                            <div class="card-block p-b-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                        <tr>
                                            <th>Tag Id</th>
                                            <th>Tag  Name </th>
                                            <th>Tag Description</th>
                                            <th>Manage</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>name</td>
                                                    <td>description</td>
                                                    <td>
                                                        <a href="#">Edit </a>
                                                        <a href="#">Delete</a>
                                                    </td>
                                                </tr>
{{--                                            @endforeach--}}

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
