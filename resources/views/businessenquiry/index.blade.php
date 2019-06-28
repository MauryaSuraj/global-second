@extends('layouts.admin')
@section('content-admin')

    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Business Enquiry</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                        <li><i class="feather icon-trash close-card"></i></li>
                                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block p-b-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                        <tr>
                                            <th>#id</th>
                                            <th>Business Name </th>
                                            <th>Client Name</th>
                                            <th>client Email</th>
                                            <th>Client phone Number</th>
                                            <th>
                                                Enquiry About
                                            </th>
                                            <th>
                                                Enquiry At
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($enquiry as $enq)
                                            <tr>
                                                <td>{{ $enq->id }}</td>
                                                <td>{{ $enq->bussiness_listing_id }}</td>
                                                <td>{{ $enq->name }}</td>
                                                <td>{{ $enq->email }}</td>
                                                <td>{{ $enq->phone }}</td>
                                                <td>{{ $enq->message }}</td>
                                                <td> {{ $enq->created_at }}</td>
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

