@extends('layouts.admin')
@section('content-admin')

    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Reviews On Listings</h5>

                            </div>
                            <div class="card-block p-b-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User ID</th>
                                            <th>Listing ID</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Review At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reviews as $review)
                                        <tr>
                                            <td>{{ $review->id }}</td>
                                            <td>{{ $review->user_id }}</td>
                                            <td>{{ $review->listing_id }}</td>
                                            <td>{{ $review->description }}</td>
                                            <td>{{ $review->image }}</td>
                                            <td>{{ $review->created_at }}</td>

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
