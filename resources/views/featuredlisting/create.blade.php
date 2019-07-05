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
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="card-block p-b-0">
                                @if(session()->has('featured'))
                                    <div class="alert my-2 alert-success">
                                        {{ session()->get('featured') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                        <tr>
                                            <th>Listing Name</th>
                                            <th>Listing Category</th>
                                            <th>Listing Tag</th>
                                            <th>Listing Pricing</th>
                                            <th>Listing Status</th>
                                            <th>Add to featured Listing</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($listings as $listing)
                                            <tr>
                                                <td>{{ $listing->name }}</td>
                                                <td>{{ $listing->category->name }}</td>
                                                <td>{{ $listing->tag->name }}</td>
                                                <td>Rs. {{ $listing->price }}</td>
                                                <td>
                                                    @if($listing->status==0)
                                                        <span class="bg-c-orenge p-1 rounded">Un Active</span>
                                                    @else
                                                        <span class="bg-c-lite-green p-1 text-white rounded">Active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="text-center">

                                                       <form action="{{ route('featuredlisting.store') }}" method="post">
                                                           @csrf
                                                           <input type="hidden"  name="listing_id" id="listing_id" value="{{ $listing->id }}">
                                                           <input type="number" min="2" class="form-control"  name="days" id="days" placeholder="Days for Featured Listing">
                                                               <button type="submit" class="colhovers" style="background: transparent; border-color: transparent;">
                                                                   <img src="https://image.flaticon.com/icons/svg/1873/1873165.svg"  style="width: 40px; height: 40px;" alt="">
                                                               </button>
                                                   </form>
                                                    </div>
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
