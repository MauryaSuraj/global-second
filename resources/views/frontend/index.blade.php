@extends('layouts.app')

@section('content')
    <div>
        <div class="image-bg">
            <div class="wave"></div>
            <div class="container d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center">
                    <h1 class="text-white h1 text-left font-weight-bold  animated fadeIn" style="text-shadow: 2px 2px 2px rgba(0,0,0,0.1);">
                        Find Everything About Agarwal Community <hr>
                    </h1>
                    <h2 class="text-white h2 font-weight-light">Take advantage of this free of charge and can further strengthen the unity of Agarwal society.</h2>
                    <section class="search-sec mt-5">
                        <div class="container">
                            <form action="{{ route('search.store') }}" method="post" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 p-1">
                                                <select class="form-control search-slt" id="category_id" name="category_id">
                                                    <option>Select Category</option>
                                                    @foreach($categorys as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 p-1">
                                                <input type="text" required name="query" id="query" class="form-control search-slt" placeholder="Enter Keyword here...">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 p-1">
                                                <button type="submit" class="btn btn-danger wrn-btn">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>

            </div>
        </div>
        <div class="container my-4 text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <h2 class="text-center h2 my-5 font-weight-bold">Choose Category </h2>
                </div>
                @foreach($categories as $category)
                    <div class="col-md m-2 colhover p-3">
                            <img src="{{ url('images/').'/category/'.$category->image }}" alt="" style="width: 60px;">
                            <h5 class="font-weight-bold text-center mt-2">{{ $category->name }}</h5>

                        <a href="{{ route('search.show',$category->id) }}">View </a>
                    </div>
                    @endforeach
            </div>
        </div>
        <div class="bg-about">
            <div class="wave"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 py-2">
                        <div class="row">
                            <div class="col-md-5 m-auto">
                                <img src="{{ url('images/').'/agarsen.png' }}" class="mx-auto" style="width: auto; height: 50vh;" alt="">
                            </div>
                            <div class="col-md-7 p-auto m-auto ">
                                <h1 class="text-center text-white mt-4 mb-2">About us</h1>
                                <p class="text-white text-justify">
                                    The Global Agra Vaishchamber app has been created to further extend the prestige of Agrawal society and to extol the agarwal society of Maharaja Agarsen ji at the international level. Crores of brothers can easily download this app on their Android mobile and Apple iPhone.
                                </p>
                                <p class="text-justify text-white">
                                    In the Agarwal Brothers app, information about the world's most respected persons, information about married men and women, Details of the achievements of Agarwal society and details of all the brothers and sisters joining the ``Global Agra Vaishchamber`` app is available, plans to increase their business in the country and abroad.
                                </p>
                                <p class="text-justify text-white">
                                    By downloading the Global Agra Vaishchamber app on your Android mobile and Apple iPhone, all the foreclosures can take advantage of this free of charge and can further strengthen the unity of Agarwal society.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
        <div class="container my-4 ">
            <div class="row">
                <div class="col-md-12"> <h1 class="text-center my-5">Business Listing</h1>
                </div>
            </div>
            <div class="row text-center">
                @foreach($listings as $listing)
                    <div class="col-md mx-2 my-2 onhovercd" style="width: 255px; height: 200px;  border-radius: 5px 20px; box-shadow: 0 4px 6px #6e24a833;   background-image: linear-gradient(to bottom , transparent, #000000ba), url('{{ url('images/').'/listing/'.$listing->image }}')">
                        <a href="/listing/{{$listing->id}}" >
                        <div class="mx-auto pt-5 mt-3  text-white ">
                            <h5 class="text-left h3  my-2 font-weight-bold text-white text-uppercase">{{ $listing->name }}</h5>
                            <p class="text-left text-white"><strong>Price</strong>   Rs. {{ $listing->price }}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        </div>

        <div class="bg-about">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-elite" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-star "></i>Elite Aggrawals </a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-great" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-heart"></i> Great Personality </a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-matrimonial" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fas fa-user"></i> Matrimonial Profiles </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-offers" role="tab" aria-controls="nav-about" aria-selected="false"><i class="fas fa-gift"></i> Offers </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-shradhanjali" role="tab" aria-controls="nav-about" aria-selected="false"><i class="fas fa-fan"></i> Shradhanjali  </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-about" aria-selected="false"><i class="fas fa-book"></i> Education </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-news" role="tab" aria-controls="nav-about" aria-selected="false"><i class="far fa-newspaper"></i> News </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-promotions" role="tab" aria-controls="nav-about" aria-selected="false"><i class="fas fa-ad"></i> Promotions </a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active p-3" id="nav-elite" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Elite Aggrawals </h2>
                                    </div>
                                    @foreach($elite_ag as $edu)
                                        <div class="col-md-3 my-1">
                                            <div class="avatar mx-auto">
                                                <img src="{{ url('images/').'/profile/'.$edu->image }}" class="rounded img-fluid " alt="">
                                                <h3 class="font-weight-bold text-left mt-3">
                                                    {{ $edu->name }}
                                                </h3>
                                                <p class="text-left">
                                                    {{ $edu->email }}
                                                </p>
                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade p-3" id="nav-great" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Great Personality </h2>
                                    </div>
                                    @foreach($great_pers as $edu)
                                        <div class="col-md-3 my-1">
                                            <div class="avatar mx-auto">
                                                <img src="{{ url('images/').'/profile/'.$edu->image }}" class="rounded img-fluid " alt="">
                                                <h3 class="font-weight-bold text-left mt-3">
                                                    {{ $edu->name }}
                                                </h3>
                                                <p class="text-left">
                                                    {{ $edu->email }}
                                                </p>
                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade p-3" id="nav-matrimonial" role="tabpanel" aria-labelledby="nav-contact-tab">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Matrimonial Profile </h2>
                                    </div>
                                    @foreach($matrimonials as $matrimonail)

                                    <div class="col-md-4 my-1">
                                        <div class="avatar mx-auto">
                                            <img src="https://images.pexels.com/photos/736716/pexels-photo-736716.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded img-fluid " alt="">
                                            <h3 class="font-weight-bold text-left mt-3">
                                                {{$matrimonail->name}}
                                            </h3>
                                            <p class="text-left">
                                               Profession :     {{ $matrimonail->profession }}
                                            </p>
                                            <p class="text-left">
                                              Date Of Birth :   {{ $matrimonail->date_of_birth }}
                                            </p>
                                            <a href="{{ route('matri.show',$matrimonail->id) }}" class="btn btn-outline-primary">Read More</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade p-3" id="nav-offers" role="tabpanel" aria-labelledby="nav-about-tab">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Offers</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-3" id="nav-shradhanjali" role="tabpanel" aria-labelledby="nav-about-tab">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Shradhanjali </h2>
                                    </div>
                                    @foreach($Shradhnajali as $edu)
                                        <div class="col-md-3 my-1">
                                            <div class="avatar mx-auto">
                                                <img src="{{ url('images/').'/profile/'.$edu->image }}" class="rounded img-fluid " alt="">
                                                <h3 class="font-weight-bold text-left mt-3">
                                                    {{ $edu->name }}
                                                </h3>
                                                <p class="text-left">
                                                    {{ $edu->email }}
                                                </p>
                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade p-3" id="nav-education" role="tabpanel" aria-labelledby="nav-about-tab">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Education </h2>
                                    </div>
                                    @foreach($Education as $edu)
                                        <div class="col-md-3 my-1">
                                            <div class="avatar mx-auto">
                                                <img src="{{ url('images/').'/profile/'.$edu->image }}" class="rounded img-fluid " alt="">
                                                <h3 class="font-weight-bold text-left mt-3">
                                                    {{ $edu->name }}
                                                </h3>
                                                <p class="text-left">
                                                    {{ $edu->email }}
                                                </p>
                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade p-3" id="nav-news" role="tabpanel" aria-labelledby="nav-about-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>News</h2>
                                    </div>
                                            @foreach($newses as $news)
                                        <div class="col-md-6">
                                            <a href="{{ route('news.show',$news->slug) }}">
                                            <div class="d-flex">
                                                <img src="{{ url('images/').'/news/'.$news->thumbnail }}" style="height: 150px; width: 150px;"  alt="">
                                                <div class="mx-2">
                                                    <h3 class="my-2 h3 font-weight-bold">{{ $news->name }} </h3>
                                                    <p>
                                                        {!! \Illuminate\Support\Str::words($news->details, 10) !!}
                                                    </p>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                            @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade p-3" id="nav-promotions" role="tabpanel" aria-labelledby="nav-about-tab">
                                <div class="row">
                                    <div class="col-md">
                                        <h1>
                                            Promotions
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="bg-app">
            <div class="container pt-3">
                <div class="row">
                    <div class="col-md-6 text-white m-auto">
                        <h4 class="text-white">Now On Smart Phones</h4>
                        <h2> Download Our Apps Free </h2>
                        <p class="text-white">More than 17,000 reviews from All over the world, GLOBAL AGRA VAISHCHAMBER will help you to strengthen the unity of Agarwal society</p>
                        <div class="d-flex mt-3">
                            <div class="app-btn">
                                <img src="https://image.flaticon.com/icons/svg/1532/1532534.svg" alt="" style="width: 40px; height: 40px" class="pr-3"><span class="text-dark">Play Store</span>
                            </div>
                            <div class="app-btn">
                                <img src="https://image.flaticon.com/icons/svg/564/564401.svg" alt="" style="width: 40px; height: 40px;" class="pr-3"><span class="text-dark">App Store</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('images/').'/app.png' }}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
