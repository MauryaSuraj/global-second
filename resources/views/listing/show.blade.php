@extends('layouts.app')
@section('content')
    <div class="bg-about-page">
        <div class="container">
            <div class="row">
                <div class="col-md text-center py-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ url('images/').'/listing/'.$bu_list->image }}" >
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ url('images/').'/listing/'.$bu_list->image }}" >
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ url('images/').'/listing/'.$bu_list->image }}" >
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="single-page-title-bar single-post mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xs-12 col-md-10 col-sm-12">
                    <div class="short-detail">
                        <div class="list-category"><ul> <li>  <a href="javascript:void(0)">  @foreach($categories as $category) {{ $category->name  }} @endforeach </a> </li> </ul></div>
                        <div class="list-heading"> <h2>{{ $bu_list->name }} </h2> </div>
                        <div class="list-meta">
                            <ul>
                                <li><span class="list-posted-date">{{ $bu_list->created_at }}</span></li>
                                <li> <span class="ratings"> <i class="fa fa-star color" aria-hidden="true"></i><i class="fa fa-star color" aria-hidden="true"></i><i class="fa fa-star color" aria-hidden="true"></i><i class="fa fa-star-half-o color" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="rating-counter"> (4 ratings)</i> </span> </li>
                                <li class="list-meta-with-icons"><a href="javascript:void(0)">Views : {{ $bu_list->views }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="main-contentiner map-half-content" style="padding:0;">
        <div class="container-fluid">
                       <section class="single-post single-detail-page">
                <div class="container">
                    <div class="row">
                        <div class="heading-master">
                        </div>
                        <div class="col-lg-8 col-xs-12 col-md-8 col-sm-12">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="list-detail">
                                <div class="panel-group" id="accordion_listing_detial" role="tablist" aria-multiselectable="true">

                                    <div class="panel panel-default" id="d-desc">
                                        <div class="panel-heading" role="tab" id="ed-slot-1"> <h4 class="panel-title px-2 py-3 ml-3 h3">  Description </h4></div>
                                        <div class="panel-collapse">
                                            <div class="panel-body"><p>{{ $bu_list->description }}</p></div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default" id="dlisting-video">
                                        <div class="panel-heading" role="tab" id="ed-slot-1"> <h4 class="panel-title px-2 py-3 ml-3 h3">  Video </h4></div>
                                        <div id="d-video-coll" class="panel-collapse" role="tabpanel" aria-labelledby="d_list_video">
                                        <div class="panel-body">
                                                <iframe width="100%" height="370"
                                                        src="{{ $bu_list->video }}" frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default" id="d-comments">
                                        <div class="panel-heading" role="tab" id="ed-slot-1"> <h4 class="panel-title px-2 py-3 ml-3 h3">  Reviews </h4></div>
                                        <div class="panel-collapse">
                                            <div class="panel-body">

                                             @if(\Illuminate\Support\Facades\Auth::check())
                                                    <form method="POST" action="{{ route('userreview.store') }}">
                                                        @csrf

                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <input type="hidden" hidden name="listing_id" value="{{ $bu_list->id }}">
                                                                <textarea id="description" type="text" placeholder="Give Your review here ....." class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description"></textarea>
                                                                @error('description')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-0">
                                                            <div class="float-right col-md-12">
                                                                <button type="submit" class="btn btn-primary">
                                                                    {{ __('Review Us') }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="col-md-12">
                                                        @if($msgs)
                                                            <div class="alert alert-success mt-3">
                                                                {{ $msgs }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                 @else
                                                    <div class="alert custom-alert custom-alert--warning" role="alert">
                                                        <div class="custom-alert__top-side">
                                                            <span
                                                                class="alert-icon custom-alert__icon  ti-info-alt "></span>
                                                            <div class="custom-alert__body">
                                                                <h6 class="custom-alert__heading">
                                                                    Login To Write A Review. </h6>
                                                                <div class="custom-alert__content">
                                                                    Sorry, you don't have permissions to post a review.
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <a href="/login" class="btn btn-outline-primary">Login</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="reviews p-4">
                                <div class="review-filters">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12">
                                            <div class="review-title">
                                                <h3 class="py-2">User Reviews</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @foreach($reviews as $review)

                                    <div class="review-box bg-light p-2">
                                        <div class="review-author-left">
                                            <div class="review-author-img">
                                                <a href="#"><img
                                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png"
                                                        class="img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="review-author-right">
                                            <div class="review-author-detail">
                                                <h4>{{ $review->description }}</h4>
                                                <div class="review-detail-meta">
                                                    <span class="ratings">
                                                        <i class="fa fa-star text-danger"></i>
                                                        <i class="fa fa-star text-danger"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    By
                                                    <strong>User Name here</strong></a> on <strong>{{ $review->created_at }}</strong>
                                                </div>
                                                <p>{{ $review->description }}</p>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 dwt_listing_listing-detialz">

                            <div class="pricing-widget widget">
                                <img src="{{ url('images/').'/rupee.ico' }}"
                                     alt="Pricing" style="height: 35px; width: 30px; margin-right: 10px;">
                                <span class="tool-tip h5" title="Expensive">Pricing</span>
                                <span class="price-status  pull-right"> <strong>Rs. {{ $bu_list->price }}</strong> </span>
                            </div>

                            <div class="widget">
                                <div class="h5">
                                     <span class="mr-3 h5"><img src="https://image.flaticon.com/icons/svg/138/138237.svg" style="width: 40px" alt=""></span> Tags
                                </div>
                                <div class="listing-tagcloud">
                                    @foreach($tags as $tag)
                                        <a href="#"># {{ $tag->name }}</a>
                                        @endforeach
                                </div>
                            </div>
                            <div class="widget">
                                <div class="row">
                                    <h4 class="my-2 ml-2"> Listing Address </h4>
                                    <hr>
                                    <div class="col-md-12">
                                        <ul class="list-group my-3">
                                            @foreach($locations as $location)
                                                <p> {{ $location->address }} , {{ $location->city }} , {{ $location->area }} , {{ $location->pincode }}</p>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="col-md-12">
                                    <div class="business-hours">
                                        <h2 class="h3">Opening Hours</h2>
                                        <ul class="list-unstyled opening-hours">
                                            <li>Sunday <span class="pull-right">Closed</span></li>
                                            <li>Monday <span class="pull-right">{{ $bu_list->opening_time }}- {{ $bu_list->closing_time }}</span></li>
                                            <li>Tuesday <span class="pull-right">{{ $bu_list->opening_time }}- {{ $bu_list->closing_time }}</span></li>
                                            <li>Wednesday <span class="pull-right">{{ $bu_list->opening_time }}- {{ $bu_list->closing_time }}</span></li>
                                            <li>Thursday <span class="pull-right">{{ $bu_list->opening_time }}- {{ $bu_list->closing_time }}</span></li>
                                            <li>Friday <span class="pull-right">{{ $bu_list->opening_time }}- {{ $bu_list->closing_time }}</span></li>
                                            <li>Saturday <span class="pull-right">{{ $bu_list->opening_time }}- {{ $bu_list->closing_time }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item w-50  ">
                                    <a class="nav-link active font-weight-bold" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"  aria-selected="true">Business Listed By</a>
                                </li>
                                <li class="nav-item w-50  ">
                                    <a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contact us</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    @foreach($profiles as $profile)
                                       <p>Name :   {{ $profile->name }}</p>
                                        <p>Email : {{ $profile->email }}  </p>
                                        <a href="{{ route('support.show',$profile->id ) }}">View Profile</a>
                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form method="POST" action="{{ route('listing.store') }}">
                                        @csrf
                                        <div class="form-group row">

                                            <div class="col-md-12">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input type="hidden" hidden name="listing_id" value="{{$bu_list->id}}">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input id="phone" type="text"  placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <textarea id="message" type="text" placeholder="Message here" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message"></textarea>
                                                @error('message')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <p>
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endsection
