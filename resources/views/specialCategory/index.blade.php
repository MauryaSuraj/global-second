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
                                <h5>Special Category List</h5>
                                <div class="card-header-right">
                                    <a href="{{ route('specialCategory.create') }}" class="btn btn-outline-primary">Add to Special Category </a>
                                </div>
                            </div>
                            <div class="card-block p-b-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                        <tr>
                                            <th> Id</th>
                                            <th>Category Name </th>
                                            <th>Comment</th>
                                            <th>Status </th>
                                            <th>Profile ID</th>
                                            <th>User ID</th>
                                            <th>Assigned At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($specialCategory)>0)
                                            @foreach($specialCategory as $tag)
                                                <tr>
                                                    <td>{{ $tag->id }}</td>
                                                    <td>{{ $tag->special_category_name }}</td>
                                                    <td>{{ \Illuminate\Support\Str::words($tag->comment , 5) }}</td>
                                                    <td>{{ $tag->status }}</td>
                                                    <td>{{ $tag->profile_id }}</td>
                                                    <td>{{ $tag->user_id }}</td>
                                                    <td>{{ $tag->created_at }}</td>
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
