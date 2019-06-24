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
                                <h5>Tags  </h5>
                                <div class="card-header-right">
                                    <a href="/admin/featuredmember/create" class="btn btn-outline-primary">Add MemberShip</a>
                                </div>
                            </div>
                            <div class="card-block p-b-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                        <tr>
                                            <th> Id</th>
                                            <th>MemberShip  Name </th>
                                            <th>MemberShip Description</th>
                                            <th>Price Range</th>
                                            <th>Duration (Months)</th>
                                            <th>Created At </th>
                                            <th>Manage</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($featuredmemberships)>0)
                                            @foreach($featuredmemberships as $featuredmembership)
                                                <tr>
                                                    <td>{{ $featuredmembership->id }}</td>
                                                    <td>{{ $featuredmembership->name }}</td>

                                                    <td>{{ Str::words($featuredmembership->description, 3) }}</td>
                                                    <td>Rs. {{ $featuredmembership->price_low }} - {{ $featuredmembership->price_high }}</td>
                                                    <td> {{ $featuredmembership->duration }}</td>
                                                    <td> {{ $featuredmembership->created_at }}</td>
                                                    <td>
                                                        <a href="#">Edit </a>
                                                        <a href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @else
                                            <p class="alert alert-danger m-2">
                                                Nothing to Show
                                            </p>
                                            @endif

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
