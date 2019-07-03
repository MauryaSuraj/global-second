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
                                                <td>{{ \Illuminate\Support\Str::words($listing->description, 5) }}</td>
                                                <td>
                                                    <a href="/admin/businesslisting/{{$listing->id}}"> <i class="fas fa-2x text-c-purple fa-eye"></i></a>
                                                    @if($listing->status==0)
                                                        <a href="#"> <i class="fas fa-toggle-on fa-2x text-danger"></i></a>
                                                    @else
                                                        <a href="#"> <i class="fas fa-toggle-off fa-2x text-success"></i></a>
                                                    @endif
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
