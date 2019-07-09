@extends('layouts.app')

@section('content')
    <div class="bg-about-page">
        <div class="container">
            <div class="row">
                <div class="col-md text-center py-5">
                    <h5 class="display-4 text-white my-5">
                       Contact Us
                    </h5>
                </div>
            </div>
        </div>
    </div>
<div class="bg-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                    <div class="alert alert-success animated fadeOut delay-3">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8 mb-2">

                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                        <div class="col-md-6">
                            <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" required autocomplete="subject">

                            @error('subject')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number ') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name="phone" required autocomplete="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Message" class="col-md-4 col-form-label text-md-right">{{ __(' Message ') }}</label>

                        <div class="col-md-6">
                            <textarea id="phone" type="text" class="form-control" name="message" required autocomplete="phone"></textarea>
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

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3">
                        <img src="https://image.flaticon.com/icons/svg/1076/1076323.svg" class="w-50" alt="">
                    </div>
                    <div class="col-md-9">
                        <h3 class="font-weight-bold">Physical Address</h3>
                        <p>
                            A-18, 2nd Floor, Gate No 4, New Multan Nagar Paschim Vihar, Rohtak Road, Delhi 110026
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="https://image.flaticon.com/icons/svg/148/148935.svg" class="w-50" alt="">
                    </div>
                    <div class="col-md-9">
                        <h3 class="font-weight-bold">Working Hours</h3>
                        <p> Monday - Friday (9am - 6pm)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="https://image.flaticon.com/icons/svg/254/254043.svg" alt="" class="w-50">
                    </div>
                    <div class="col-md-9">
                        <h3 class="font-weight-bold">Contact  Number</h3>
                        <p>Phone: +91-9873927287</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="https://image.flaticon.com/icons/svg/321/321817.svg" alt="" class="w-50">
                    </div>
                    <div class="col-md-9">
                        <h3 class="font-weight-bold"> Email Address
                        </h3>
                        <p>enquiry@globalagra-vaishchamber.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
