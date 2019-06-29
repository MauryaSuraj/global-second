@extends('layouts.app')

@section('content')
    <div style=" margin-bottom: -3rem; margin-top: -3rem;">
        <div class="image-bg">
            <div class="container">
                <div class="row py-5">
                    <h1 class="text-white display-3 font-weight-bold mt-5 heading-one animated fadeIn">
                        Find Everything About Agarwal Community
                    </h1>
                    <h2 class="text-white h2">Take advantage of this free of charge and can further strengthen the unity of Agarwal society.</h2>
                </div>
                <div class="row pt-4 mt-5">
                    <div class="col-md-10 col-sm-10">
                        <input type="text" class="form-control rounded-pill">
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <a href="#" class="btn btn-outline-primary rounded-pill">Search</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-4 text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center h2 my-5 font-weight-bold">Choose Category </h2>
                </div>
                @foreach($categories as $category)
                    <div class="col-md m-2 colhover p-3">
                            <img src="{{ url('/').'/storage/'.$category->image }}" alt="" class="w-75" style="height: 200px;">
                            <h5 class="font-weight-bold text-center mt-2">{{ $category->name }}</h5>
                        <a href="{{ route('listing.index',$category->id) }}">View Category</a>
                    </div>
                    @endforeach
            </div>
        </div>
        <div class="bg-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 py-3">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/agarsen.png" class="w-100" alt="">
                            </div>
                            <div class="col-md-7 p-auto m-auto ">
                                <h1 class="text-center text-white mt-4 mb-2">About us</h1>
                                <p class="text-white text-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta dolor doloremque dolorum ducimus eaque, eligendi enim incidunt iusto, laboriosam, nisi quae rem repudiandae sapiente velit voluptate voluptatum. Illum, ipsum!
                                </p>
                                <p class="text-justify text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aspernatur, cumque deserunt dicta dignissimos earum illo ipsam itaque magni nam necessitatibus nostrum possimus quasi, repellendus similique sit totam velit.
                                </p>
                                <p class="text-justify text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aspernatur, cumque deserunt dicta dignissimos earum illo ipsam itaque magni nam necessitatibus nostrum possimus quasi, repellendus similique sit totam velit.
                                </p><p class="text-justify text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aspernatur, cumque deserunt dicta dignissimos earum illo ipsam itaque magni nam necessitatibus nostrum possimus quasi, repellendus similique sit totam velit.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-12"> <h1 class="text-center my-5">Business Listing</h1>
                </div>
            </div>
            <div class="row text-center">
                @foreach($listings as $listing)
                    <div class="col-md-3">
                        <img src="https://images.pexels.com/photos/1415555/pexels-photo-1415555.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="w-100" alt="">
                        <h5 class="text-center h5 my-2">{{ $listing->name }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-about">
            <div class="container py-5">
                <div class="row">
                    <div class="col-xs-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-elite" role="tab" aria-controls="nav-home" aria-selected="true">Elite Aggrawals </a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-great" role="tab" aria-controls="nav-profile" aria-selected="false">Great Personality </a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-matrimonial" role="tab" aria-controls="nav-contact" aria-selected="false">Matrimonial Profiles </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-offers" role="tab" aria-controls="nav-about" aria-selected="false">Offers </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-shradhanjali" role="tab" aria-controls="nav-about" aria-selected="false">Shradhanjali  </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-about" aria-selected="false">Education </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-news" role="tab" aria-controls="nav-about" aria-selected="false">News </a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-promotions" role="tab" aria-controls="nav-about" aria-selected="false">Promotions </a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active p-3" id="nav-elite" role="tabpanel" aria-labelledby="nav-home-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                            </div>
                            <div class="tab-pane fade p-3" id="nav-great" role="tabpanel" aria-labelledby="nav-profile-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                            </div>
                            <div class="tab-pane fade p-3" id="nav-matrimonial" role="tabpanel" aria-labelledby="nav-contact-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                            </div>
                            <div class="tab-pane fade p-3" id="nav-offers" role="tabpanel" aria-labelledby="nav-about-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                            </div>
                            <div class="tab-pane fade p-3" id="nav-shradhanjali" role="tabpanel" aria-labelledby="nav-about-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                            </div>
                            <div class="tab-pane fade p-3" id="nav-education" role="tabpanel" aria-labelledby="nav-about-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                            </div>
                            <div class="tab-pane fade p-3" id="nav-news" role="tabpanel" aria-labelledby="nav-about-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                            </div>
                            <div class="tab-pane fade p-3" id="nav-promotions" role="tabpanel" aria-labelledby="nav-about-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
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
                        <h4>Now On Smart Phones</h4>
                        <h2> Download Our Apps Free </h2>
                        <p class="text-white">More than 17,000 reviews from All over the world, GLOBAL AGRA VAISHCHAMBER will help you to strengthen the unity of Agarwal society</p>
                        <div class="d-flex mt-3">
                            <img src="https://image.flaticon.com/icons/svg/1532/1532534.svg" alt="" style="width: 60px; height: 60px" class="pr-3">
                            <img src="https://image.flaticon.com/icons/svg/564/564401.svg" alt="" style="width: 60px; height: 60px;" class="pr-3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="https://globalagra-vaishchamber.com/wp-content/uploads/2018/05/app.png" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
