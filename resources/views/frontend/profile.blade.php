@extends('layouts.app')
@section('content')
    <div class="container emp-profile my-5">
        <form method="post">
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{ $Supporter_profiles->name }}
                        </h5>
                        <h6>
                            {{ $Supporter_profiles->businessname }}
                        </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Listings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>Details</p>
                        <span href="">EMAIL :   {{ $Supporter_profiles->email }}</span><br/>
                        <span href="">PHONE :  {{ $Supporter_profiles->mobile }}</span><br/>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->	address }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Birth Date</label>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        {{ $Supporter_profiles->birthdate }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->businessname }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->businessname }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->businessname }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Pincode</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->pincode }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Caste</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->caste }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Original Place</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->originalplace }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Loksabha</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->loksabha }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Vidhansabha</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->vidhansabha }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Panchayat</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->panchayat }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->businessname }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->officeaddress }}</p>
                                </div>
                            </div>
                            @if($Supporter_profiles->married != null)
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Married</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $Supporter_profiles->married }}</p>
                                </div>
                            </div>
                                @endif
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           <div class="row">
                               <h1>Listing By Users</h1>
                               @if(count($listings) > 0)
                                   @foreach($listings as $listing)
                                       <div class="col-md-12 my-2">
                                           <div class="card card-cascade narrower card-ecommerce">
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <img src="{{ url('images/').'/listing/'.$listing->image }}" class="h-100 w-100">
                                                   </div>
                                                   <div class="col-md-6 py-2">
                                                       <div class="card-body text-left card-body-cascade">
                                                           <h4 class="card-title"><strong><a href="/listing/{{$listing->id}}">{{ $listing->name }}</a></strong></h4>
                                                           <p class="card-text text-justify">
                                                               {{ substr($listing->description,0,strpos($listing->description, ' ', 250) )  }}
                                                           </p>
                                                           <p class="card-text text-justify">

                                                           </p>
                                                           <span> <strong>Opening Closing Time </strong> {{ $listing->opening_time }} {{ $listing->closing_time }}</span>
                                                           @foreach($address as $add)
                                                               <br>
                                                               <span><strong>Location : </strong> {{ $add->city }} </span>
                                                           @endforeach
                                                           <p class="d-flex justify-content-between">
                                                               <span> <strong>Price : </strong>  Rs.{{ $listing->price }}</span>
                                                               <a href="/listing/{{$listing->id}}" class="btn btn-outline-danger ">View</a>
                                                           </p>
                                                       </div>

                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   @endforeach
                                   {{ $listings->links() }}
                                   @else
                                  <div class="col-md-12">
                                      <p class="my-5">
                                          User have't any listing
                                      </p>
                                  </div>
                               @endif
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
