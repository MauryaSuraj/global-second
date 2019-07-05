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
                                    <a href="{{ route('featuredlisting.create') }}" class="btn btn-outline-primary">Add Featured Listing </a>
                                </div>
                            </div>
                            <div class="card-block p-b-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                        <tr>
                                            <th> Id</th>
                                            <th>Listing ID </th>
                                            <th>Status </th>
                                            <th>Days </th>
                                            <th>Created On</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($featured_listings)>0)
                                            @foreach($featured_listings as $tag)
                                                <tr>
                                                    <td>{{ $tag->id }}</td>
                                                    <td>{{ $tag->listing_id }}</td>
                                                    <td>
                                                        @if($tag->status == 1)
                                                            <i class="fas  text-success fa-circle"></i>
                                                            @else
                                                            <i class="fas  text-danger fa-circle"></i>
                                                            @endif
                                                    </td>
                                                    <td> {{ $tag->days }} days</td>
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
        </div>
    </div>


@endsection
