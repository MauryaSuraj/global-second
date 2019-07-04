@extends('layouts.admin')
@section('content-admin')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1> {{$bu_list->name}}</h1>
                        <div class="">
                            <span> <img src="https://image.flaticon.com/icons/svg/204/204281.svg" style="height: 30px; width: 30px;" class="font-weight-bold"> {{ $bu_list->views }}</span>
                            <span>
                        @if($bu_list->status == 0)
                                    <span class="bg-c-red p-2 rounded font-weight-bold text-white ml-5">Un Active</span>
                                @else
                                    <span class="bg-c-lite-green p-2 rounded font-weight-bold text-white ml-5">Active</span>
                                @endif
                        </span>
                        </div>
                        <hr>
                        <h3 class="h6"> Details About Listing </h3>
                        <p class="text-justify"> {{ $bu_list->description }}</p>
                        <h3 class="h6">Price</h3>
                        <p class="font-weight-bold"> Rs.  {{ $bu_list->price }} </p>
                        <h3 class="h6">Opening And Closing time</h3>
                        <p><span class="font-weight-bold">{{ $bu_list->opening_time }}</span> - <span class="font-weight-bold">{{ $bu_list->closing_time }}</span></p>
                        <h3 class="h6">Created AT</h3>
                        <p class="font-weight-bold">{{ $bu_list->created_at }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <iframe class="w-100" src="{{ $bu_list->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="row mt-3">
                            <img src="{{ url('images/').'/listing/'.$bu_list->image }}" class="w-100">
                        </div>
                        <div class="row">
                            <h4 class="my-2"> Listing Address </h4>
                            <div class="col-md-12">
                                <ul class="list-group my-3">
                                    @foreach($locations as $location)
                                        <li class="list-group-item py-1 font-weight-bold"> <strong>Address : </strong>  {{ $location->address }}</li>
                                        <li class="list-group-item py-1 font-weight-bold"> <strong>City : </strong> {{ $location->city }} </li>
                                        <li class="list-group-item py-1 font-weight-bold"> <strong>Area : </strong> {{ $location->area }}</li>
                                        <li class="list-group-item py-1 font-weight-bold"> <strong>Pincode : </strong> {{ $location->pincode }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">

                <div class="card-body">
                    <h2>Listed By </h2> <hr>
                    <p class="font-weight-bold"> <span>Name : </span> <span>{{ $bu_list->user->name }}</span> </p>
                    <p class="font-weight-bold"> <span>Email ID : </span> <span> {{ $bu_list->user->email }} </span></p>
                    @foreach($profiles as $profile)
                        <p class="font-weight-bold"> <span>Phone No. : </span> <span> {{ $profile->phone }} </span></p>
                    <h4 class="h4">Address</h4>
                    <p>{{ $profile->address }}</p>
                        <h4 class="h4">Description</h4>
                    <p>{{ $profile-> description }}</p>
                        <img src="{{ $profile->image }}" class="w-25 rounded h-25" alt="">
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
