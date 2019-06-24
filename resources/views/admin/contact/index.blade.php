@extends('layouts.admin')
@section('content-admin')

    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Contact Form  </h5>
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
                                            <th>Name </th>
                                            <th>Subject  </th>
                                            <th>Email </th>
                                            <th>Phone no.</th>
                                            <th>Message</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($contactlists)> 0)
                                            @foreach($contactlists as $contactlist)
                                                <tr>
                                                    <td>{{ $contactlist->name }}</td>
                                                    <td> {{ $contactlist->subject }} </td>
                                                    <td>{{ $contactlist->email }} </td>
                                                    <th>{{ $contactlist->phone }}</th>
                                                    <th>{{ $contactlist->message }} </th>
                                                    <th>{{ $contactlist->created_at }}</th>
                                                </tr>
                                            @endforeach
                                            @else
                                            <p>
                                                No form submitted yet
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
