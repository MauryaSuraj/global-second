@extends('layouts.app')
@section('content')

    <div class="bg-listing py-5">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-weight-bold text-center text-white my-2">Our Listings</h2>
                    <p class="grey-text text-center w-responsive text-white mx-auto mb-3">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
                        nostrum quisquam eum porro a pariatur veniam.
                    </p>
                </div>
            </div>
        </div>
    </div>
   <div class="container-fluid my-5">
       <div class="row">
           <div class="col-md-12">
               <section class="text-center">
                   <div class="row">
                       <div class="col-md-3">
                           <h2 class="text-left">Category</h2>
                           <hr>
                           <ul class="list-group">
                               @if($categories)
                               @foreach($categories as $category)
                                   <li class="list-group-item text-left"> <a href="{{ route('search.show',$category->id) }}"><span class="mr-2">  <img style="width: 40px" src="{{ url('images/').'/category/'.$category->image }}" alt="" /> </span> <span class="font-weight-lighter">{{ $category->name }}</span></a></li>
                                   @endforeach
                                   @endif
                           </ul>
                           <h2 class="text-left">Tags</h2>
                           <hr>
                           <div class="d-flex">
                               @if($tags)
                               @foreach($tags as $tag)
                                   <span class="bg-primary rounded-pill text-white p-1 mr-1 "> <i class="fas fa-tag p-1"></i> {{ $tag->name }}</span>
                               @endforeach
                                   @endif
                           </div>
                       </div>
                       <div class="col-md-9">
                           <div class="row">
                               <div class="col-md mx-5 my-2">
                                   @if(session()->has('success'))
                                       <div class="alert alert-success">
                                           {{ session()->get('success') }}
                                       </div>
                                   @endif
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md">
                                   <table class="table table-bordered">
                                       <thead>
                                       <tr>
                                           <th>Top Result <span class="mx-2"><i class="fas fa-chevron-right"></i></span>
                                           </th>
                                           <th>
                                               <div class="d-flex">
                                                   <span>Popularity</span>
                                                   <form method="POST" action="{{ route('filter') }}">
                                                       @csrf
                                                       <button type="submit" style="background: transparent; border: none;">
                                                              <span class="mx-1"><i class="fas fa-sort-amount-up-alt"></i>
                                                                <i class="fas fa-sort-amount-down"></i></span>
                                                       </button>
                                                   </form>
                                               </div>
                                           </th>
                                           <th> <form method="POST" action="{{ route('location') }}">
                                                   @csrf
                                                   <div class="d-flex">
                                                       <input type="text" name="item_search" id="item_search" class="form-control @error('item_search') is-invalid @enderror" placeholder="Enter location Here..">
                                                       @error('item_search')
                                                       <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                       <button type="submit" style="background: transparent; border: none;">
                                                           <span class="mx-1"><i class="fas fa-search"></i></span>
                                                       </button>
                                                   </div>
                                               </form>
                                           </th>
                                           <th>
                                            <div class="d-flex">
                                                <form method="POST" action="{{ route('latest') }}">
                                                    @csrf
                                                    <div class="d-flex">

                                                        <button type="submit" style="background: transparent; border: none;">
                                                            <span>Recent</span>
                                                            <span class="mx-1"> <img src="https://image.flaticon.com/icons/svg/199/199552.svg"  alt="" style="height: 30px; width: 30px;"> </span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                           </th>
                                           <th>
                                               <div class="d-flex">
                                                   <form method="POST" action="{{ route('latest') }}">
                                                       @csrf
                                                       <div class="d-flex">

                                                           <button type="submit" style="background: transparent; border: none;">
                                                               <span>Rating</span>

                                                           </button>
                                                       </div>
                                                   </form>
                                               </div>
                                               </th>
                                           <th>
                                               <div class="d-flex">
                                                   <button type="button" data-toggle="modal" data-target="#customFilter" class="btn btn-outline-primary">  <span class="mx-1"><i class="fas fa-sort-amount-up-alt"></i>
                                                                <i class="fas fa-sort-amount-down"></i></span>  Custom Filter</button>
                                               </div>
                                           </th>
                                       </tr>
                                       </thead>
                                   </table>
                               </div>
                           </di v>
                           @if($listings)
                           @foreach($listings as $listing)
                               <div class="col-md-12 my-2">
                                   <div class="card card-cascade narrower card-ecommerce">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <a href="/listing/{{$listing->slug}}">
                                               <img src="{{ url('images/').'/listing/'.$listing->image }}" class="h-100 w-100">
                                               </a>
                                           </div>
                                           <div class="col-md-6 py-2">
                                               <div class="card-body text-left card-body-cascade">
                                                   <h4 class="card-title"><strong><a href="/listing/{{$listing->slug}}">{{ $listing->name }}</a></strong></h4>
                                                   <p class="card-text text-justify">
                                                       {!! substr($listing->description,0,strpos($listing->description, ' ', 250) )  !!}
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
                                                   </p>
                                                   <div class="d-flex align-baseline justify-content-end">
                                                       <button type="button" data-toggle="modal" data-target="#contactListing" class="btn btn-outline-success mx-1">Contact Us</button>
                                                       <a href="/listing/{{$listing->slug}}" class="btn btn-outline-danger mx-1">View</a>
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                   </div>
                               </div>

                                       <div class="modal fade" id="customFilter" tabindex="-1" role="dialog" aria-labelledby="customFilter" aria-hidden="true">
                                           <div class="modal-dialog" role="document">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <h5 class="modal-title" id="customFilter">Custom Filter</h5>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                           <span aria-hidden="true">&times;</span>
                                                       </button>
                                                   </div>
                                                   <div class="modal-body">
                                                       <form method="POST" action="{{ route('best_deal') }}">
                                                           @csrf

                                                           <div class="container">
                                                               <div class="form-group row">
                                                                   <div class="col-md-12">
                                                                       <input id="search_term" type="text" placeholder="Enter Location or Lisiting name or category... you want to search" class="form-control @error('search_term') is-invalid @enderror" name="search_term" value="{{ old('search_term') }}" required autocomplete="search_term">
                                                                       @error('search_term')
                                                                       <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                       @enderror
                                                                   </div>
                                                               </div>
                                                               <div class="form-group row mb-0">
                                                                   <div class="col-md-8 offset-2">
                                                                       <button type="submit" class="btn btn-primary">
                                                                           {{ __('Search Here') }}
                                                                       </button>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </form>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>

                                   <div class="modal fade" id="contactListing" tabindex="-1" role="dialog" aria-labelledby="contactListing" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <h5 class="modal-title" id="contactListingLabel">Enquiry Us</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                   </button>
                                               </div>
                                               <div class="modal-body">
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
                                                               <input type="hidden" hidden name="listing_id" value="{{$listing->id}}">
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
                                                           <div class="d-flex justify-content-start">
                                                               <button type="submit" class="btn btn-primary">
                                                                   {{ __('Submit') }}
                                                               </button>
                                                           </div>
                                                       </div>
                                                   </form>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                           @endforeach
                               {{ $listings->links() }}
                               @endif
                       </div>

                   </div>
                   </div>
               </section>
           </div>
       </div>
   </div>

@endsection
