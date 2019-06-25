@extends('layouts.admin')
@section('content-admin')

    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Profile Details</h5>
                                <a href="/admin/profile/{{ Auth::user()->id }}/edit" class="btn btn-primary pull-left">Edit Profile</a>
                            </div>

                            <div class="card-block p-b-0">
                                <div class="row">
                                    <div class="col-md m-3">
                                        <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="w-100 img-thumbnail" alt="">
                                    </div>
                                    <div class="col-md-8 p-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Personal Details</h5>
                                                <h3 class="h3 my-2">{{ $user->name }}</h3>
                                                <p class="my-1 font-weight-bold">Phone No : <strong>{{ $user->profile->phone }}</strong></p>
                                                <p class="my-1 font-weight-bold">Email Id: <strong>{{ $user->email }}</strong></p>
                                                <div class="d-flex">
                                                    <img src="https://image.flaticon.com/icons/svg/179/179319.svg"  alt="" class="mr-2 " style="height: 40px; width: 40px;">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145812.svg"  alt="" class="mr-2 " style="height: 40px; width: 40px;">
                                                    <img src="https://image.flaticon.com/icons/svg/355/355992.svg"  alt="" class="mr-2 " style="height: 40px; width: 40px;">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145807.svg"  alt="" class="mr-2 " style="height: 40px; width: 40px;">
                                                </div>
                                            </div>
                                            <div class="col-md-12 my-2">
                                                <h2>Description</h2>
                                                <p class="text-dark text-justify p-2 mx-2">
                                                   {{ $user->profile->description }}
                                                </p>

                                                <h2>Address</h2>
                                                <p class="text-dark text-justify p-2 mx-2">
                                                    {{ $user->profile->address }}
                                                </p>
                                                <h2>Membership Details</h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
