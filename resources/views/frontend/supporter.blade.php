@extends('layouts.app')
@section('content')
    <div class="bg-team">
        <div class="container">
            <div class="py-5">
                <div class="row justify-content-center">
                    <h2 class="h1-responsive font-weight-bold text-center text-white my-5">Our amazing Supporter</h2>
                    <p class="grey-text w-responsive mx-auto text-center text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
                        eum porro a pariatur veniam.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
                <div class="row">
                    @foreach($Supporter_profiles as $profile_detail)
                        <div class="col-md-3 my-1">
                            <div class="avatar mx-auto">
                                <img src="@if($profile_detail->image)  {{ url('images/').'/profile/'.$profile_detail->image }} @else https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png @endif  " class="rounded img-fluid " alt="">
                                <h3 class="font-weight-bold text-left mt-3">
                                 Name :   {{ $profile_detail->name }}
                                </h3>
                                <p class="text-left" style="font-size: 14px !important;">
                                    Email :     {{ $profile_detail->email }}
                                </p>
                                <p class="text-left">
                                  Phone :   {{ $profile_detail->mobile }}
                                </p>
                                <a href="{{ route('support.show', $profile_detail->id) }}" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </div>
                     @endforeach
                </div>
        <div class="d-flex justify-content-center my-4">
            {{ $Supporter_profiles->links() }}
        </div>
    </div>
@endsection
