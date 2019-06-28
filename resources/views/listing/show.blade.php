@extends('layouts.app')
@section('content')
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
                            <div class="list-detail">
                                <div class="panel-group" id="accordion_listing_detial" role="tablist" aria-multiselectable="true">

                                    <div class="panel panel-default" id="d-desc">
                                        <div class="panel-heading" role="tab" id="ed-slot-1"> <h4 class="panel-title px-2 py-3">  Description </h4></div>
                                        <div class="panel-collapse">
                                            <div class="panel-body"><p>{{ $bu_list->description }}</p></div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default" id="dlisting-video">
                                        <div class="panel-heading" role="tab" id="ed-slot-1"> <h4 class="panel-title px-2 py-3">  Video </h4></div>
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
                                        <div class="panel-heading" role="tab" id="ed-slot-1"> <h4 class="panel-title px-2 py-3">  Reviews </h4></div>
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

                                <div class="review-box bg-light p-2">
                                    <div class="review-author-left">
                                        <div class="review-author-img">
                                            <a
                                               href="#"><img
                                                    src="http://globalagra-vaishchamber.com/wp-content/uploads/2018/02/Global-Agra-vaish-chamber-logo-e1558101072366.png"
                                                    class="img-responsive" alt="no image"></a>
                                            <div class="reviewer-category">
                                                <span class="reviewer-category-badge">Amateur</span>
                                                <span> 37 ratings</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-author-right">
                                        <div class="review-author-detail">
                                            <h4>Speaking up for service</h4>
                                            <div class="review-detail-meta">
                                                    <span class="ratings">
                                                        <i class="fa fa-star color"></i><i
                                                            class="fa fa-star color"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                            class="rating-counter"> (2/5)</i>
                                                    </span>
                                                By <a
                                                      href="http://globalagra-vaishchamber.com/wp-content/uploads/2018/02/Global-Agra-vaish-chamber-logo-e1558101072366.png">
                                                    <strong>Melisa</strong></a> on <strong>13 March, 2018</strong>
                                            </div>
                                            <p>Loved the facility itself with the perfect relaxing atmosphere.
                                                Extremely friendly staff and very accommodating.</p>
                                            <p class="image-gallery">

                                                    <span class="review-img-container">
                                                        <a href="http://globalagra-vaishchamber.com/wp-content/uploads/2018/03/pexels-photo-752823-1.jpeg"
                                                           data-fancybox="images-preview-35"> <img
                                                                src="http://globalagra-vaishchamber.com/wp-content/uploads/2018/03/pexels-photo-752823-1-90x54.jpeg"
                                                                class="img-responsive" alt="image"></a>
                                                    </span>

                                                <span class="review-img-container">
                                                        <a href="http://globalagra-vaishchamber.com/wp-content/uploads/2018/02/b788f323f87e5fd79d95d5e84930ba17a57eac9f_400x260_crop.jpg"
                                                           data-fancybox="images-preview-35"> <img
                                                                src="http://globalagra-vaishchamber.com/wp-content/uploads/2018/02/b788f323f87e5fd79d95d5e84930ba17a57eac9f_400x260_crop-90x54.jpg"
                                                                class="img-responsive" alt="image"></a>
                                                    </span>
                                            </p>
                                            <div class="review-helpful"> <span>Your reaction about this
                                                        review</span>
                                                <div class="Like">


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 dwt_listing_listing-detialz">

                            <div class="pricing-widget widget">
                                <img src="http://globalagra-vaishchamber.com/wp-content/themes/dwt-listing/assets/images/icons/price.png"
                                     alt="Pricing">
                                <span class="tool-tip" title="Expensive">Pricing</span>
                                <span class="price-status  pull-right"> <strong>Rs. {{ $bu_list->price }}</strong> </span>
                            </div>

                            <div class="widget">
                                <div>
                                     <span class="mr-3"><img src="https://image.flaticon.com/icons/svg/138/138237.svg" style="width: 40px" alt=""></span> Tags
                                </div>
                                <div class="listing-tagcloud">
                                    @foreach($tags as $tag)
                                        <a href="#"># {{ $tag->name }}</a>
                                        @endforeach
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
                                    <h3>User Details Here </h3>
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
