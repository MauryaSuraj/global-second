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
                                    <a href="/admin/tag/create" class="btn btn-outline-primary">Add Tag</a>
                                </div>
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
                                        @if(count($tags)>0)
                                            @foreach($tags as $tag)
                                                <tr>
                                                    <td>{{ $tag->id }}</td>
                                                    <td>{{ $tag->name }}</td>
                                                    <td>{{ $tag->description }}</td>
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
