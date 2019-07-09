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
                                <h5>Add Matrimony Profiles </h5>
                                <div class="card-header-right">
                                    <a href="{{ route('matrimony.create') }}" class="btn btn-outline-primary">Add Profiles</a>
                                </div>
                            </div>
                            <div class="card-block p-b-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                        <tr>
                                            <th> Id</th>
                                            <th> Name </th>
                                            <th>Gender </th>
                                            <th>Date Of Birth</th>
                                            <th>Mother Tongue</th>
                                            <th>Mobile No. </th>
                                            <th>Email</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($matri_profiles)>0)
                                            @foreach($matri_profiles as $matri_profile)
                                                <tr>
                                                    <td>{{ $matri_profile->id }}</td>
                                                    <td>{{ $matri_profile->name }}</td>
                                                    <td>{{ $matri_profile->gender }}</td>
                                                    <td>{{ $matri_profile->date_of_birth }}</td>
                                                    <td>{{ $matri_profile->mother_toungue }}</td>
                                                    <td>{{ $matri_profile->mobile_no }}</td>
                                                    <td>{{ $matri_profile->email }}</td>
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
