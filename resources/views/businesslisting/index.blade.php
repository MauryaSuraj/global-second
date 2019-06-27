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
                                    <a href="/admin/businesslisting/create" class="btn btn-outline-primary">Add Listing</a>
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
                                            <th>Manage</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($listings as $listing)
                                            <tr>
                                                <td>{{ $listing->name }}</td>
                                                <td>{{ $listing->category->name }}</td>
                                                <td>{{ $listing->tag->name }}</td>
                                                <td>{{ $listing->price }}</td>
                                                <td>
                                                    @if($listing->status==0)
                                                        <span class="bg-c-orenge p-1 rounded">Un Active</span>
                                                        @else
                                                    <span class="bg-c-lite-green p-1 rounded">Active</span>
                                                        @endif
                                                </td>
                                                <td>{{ $listing->description }}</td>
                                                <td>
                                                    <a href="/admin/businesslisting/{{$listing->id}}"> <i class="fas fa-eye"></i></a>
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
    </div>


@endsection
