@extends('layouts.admin')
@section('content-admin')

    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1>
                    About
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>About</h5>
                        <div class="card-header-right">
                            <a href="/admin/about/create" class="btn btn-outline-primary">Add About</a>
                        </div>
                    </div>
                    <div class="card-block p-b-0">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                <tr>
                                    <th> Id</th>
                                    <th>Title </th>
                                    <th>Banner</th>
                                    <th>Content</th>
                                    <th>Uploaded at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($result)>0)
                                    @foreach($result as $tag)
                                        <tr>
                                            <td>{{ $tag->id }}</td>
                                            <td>{{ $tag->title }}</td>
                                            <td> {!! $tag->content !!} </td>
                                            <td><img src="{{ url('images/').'/appAbout/'.$tag->image }}" class="w-100" alt=""></td>
                                            <td>{{ $tag->created_at }}</td>

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

@endsection
