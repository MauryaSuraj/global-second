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
   <div class="container-fluid">
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
                           @if($listings)
                           @foreach($listings as $listing)
                               <div class="col-md-12 my-2">
                                   <div class="card card-cascade narrower card-ecommerce">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <img src="{{ url('images/').'/listing/'.$listing->image }}" class="h-100 w-100">
                                           </div>
                                           <div class="col-md-6 py-2">
                                               <div class="card-body text-left card-body-cascade">
                                                   <h4 class="card-title"><strong><a href="">{{ $listing->name }}</a></strong></h4>
                                                   <p class="card-text text-justify">
                                                       {{ substr($listing->description,0,strpos($listing->description, ' ', 250) )  }}
                                                   </p>
                                                   <p class="card-text text-justify">

                                                   </p>
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
                               @endif
                       </div>

                   </div>
               </section>
           </div>
       </div>
   </div>
@endsection
