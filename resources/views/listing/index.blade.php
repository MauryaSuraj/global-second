@extends('layouts.app')
@section('content')
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <section class="text-center my-5">
                   <h2 class="h1-responsive font-weight-bold text-center my-2">Our Listings</h2>
                   <p class="grey-text text-center w-responsive mx-auto mb-3">Lorem ipsum dolor sit amet, consectetur
                       adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
                       nostrum quisquam eum porro a pariatur veniam.
                   </p>

                   <div class="row">
                       <div class="col-md-3">
                           <h2>Category</h2>
                           <ul class="list-group">
                               @if($categories)
                               @foreach($categories as $category)
                                   <li class="list-group-item text-left">{{ $category->name }}</li>
                                   @endforeach
                                   @endif
                           </ul>
                           <h2>Tags</h2>
                           <div class="d-flex">
                               @if($tags)
                               @foreach($tags as $tag)
                                   <span class="bg-primary rounded-pill text-white p-1 mr-1 "> <i class="fas fa-tag p-1"></i> {{ $tag->name }}</span>
                               @endforeach
                                   @endif
                           </div>
                       </div>
                       <div class="col-md-9">
                           @if($listings)
                           @foreach($listings as $listing)
                               <div class="col-md-12 my-2">
                                   <div class="card card-cascade narrower card-ecommerce">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <img src="https://images.pexels.com/photos/2462980/pexels-photo-2462980.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="h-100 w-100">
                                           </div>
                                           <div class="col-md-6 py-2">
                                               <div class="card-body text-left card-body-cascade">
                                                   <h4 class="card-title"><strong><a href="">{{ $listing->name }}</a></strong></h4>
                                                   <p class="card-text text-justify">
                                                       {{ $listing->description }}
                                                   </p>
                                                   <p>
                                                       Rs.{{ $listing->price }}
                                                   </p>

                                               </div>
                                               <a href="/listing/{{$listing->id}}" class="btn btn-outline-primary float-right">View</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           @endforeach
                               @endif
                       </div>

                   </div>
               </section>
           </div>
       </div>
   </div>
@endsection
