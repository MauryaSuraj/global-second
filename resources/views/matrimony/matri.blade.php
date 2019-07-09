@extends('layouts.app')
@section('content')
    <div class="matri">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2 class="my-5 text-center text-white display-4 py-5">Matrimony </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="">
    <div class="container">
        <div class="row">
            @foreach($matrimony as $matri)
            <div class="col-md-4 p-2 mt-3">
                <img src="https://images.pexels.com/photos/1934937/pexels-photo-1934937.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  class="w-100" alt="">
                <p class="mt-3"> <strong>Name : </strong>  {{ $matri->name }} <br><strong> Gender :  </strong> {{ $matri->gender }}</p>
            </div>
            <div class="col-md-8">

                <div class="row mt-5 p-3">
                    <div class="col-md-6">
                        <p> Date Of Birth :  {{ $matri->date_of_birth }} </p>
                        <p> Caste :    {{ $matri->caste }} </p>
                        <p> Religion :  {{ $matri->religion }} </p>
                        <p> Mother tongue : {{ $matri->mother_toungue }} </p>
                        <p> Mobile No : {{ $matri->mobile_no }} </p>
                        <p> Email : {{ $matri->email }} </p>
                        <p> Age :  {{ $matri->age }} </p>
                        <p> Height :  {{ $matri->height }}  </p>
                    </div>
                    <div class="col-md-6">
                        <p> Complexion :  {{ $matri->complexion }} </p>
                        <p> Education :  {{ $matri->education }}</p>
                        <p> Location : {{ $matri->location }}</p>
                        <p> Profession :  {{ $matri->profession }} </p>
                        <p>
                            Marital Status :  {{ $matri->marital_status }}
                        </p>
                        <p>
                            Sun sign :    {{ $matri->sun_sign }}
                        </p>
                        <p>
                            Salary :   {{ $matri->salary }}
                        </p>
                        <p>
                            Moon Sign :    {{ $matri->moon_sign }}
                        </p><p>
                            Family Background :   {{ $matri->family_bg }}
                        </p><p>
                            Partner Expectation   {{ $matri->partner_expectation }}
                        </p>
                        <p>
                            Posted On :    {{ $matri->created_at }}
                        </p>
                    </div>

                </div>

                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
