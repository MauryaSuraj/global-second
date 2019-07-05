@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md ">

                <div class="card">
                    <div class="card-header">{{ __('Profile Details') }}</div>
                    <div class="card-body">
                        <div class="col-md-12">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </div>
                        <form method="POST" action="{{ route('membershipdetail.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('firstname') is-invalid @enderror" name="name" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fathername" class="col-md-4 col-form-label text-md-right">{{ __('Father / Husband Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="fathername" type="text" class="form-control @error('fathername') is-invalid @enderror" name="fathername" value="{{ old('fathername') }}" required autocomplete="fathername" autofocus>

                                            @error('fathername')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus></textarea>

                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __(' Pincode') }}</label>

                                        <div class="col-md-6">
                                            <input id="pincode" type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ old('pincod') }}" required autocomplete="pincode" autofocus>

                                            @error('pincode')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fax" class="col-md-4 col-form-label text-md-right">{{ __(' Fax') }}</label>

                                        <div class="col-md-6">
                                            <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{ old('fax') }}" required autocomplete="fax" autofocus>

                                            @error('fax')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No.') }}</label>

                                        <div class="col-md-6">
                                            <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Email') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                                        <div class="col-md-6">
                                            <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus>

                                            @error('birthdate')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group row">
                                        <label for="caste" class="col-md-4 col-form-label text-md-right">{{ __('Caste') }}</label>

                                        <div class="col-md-6">
                                            <input id="caste" type="text" class="form-control @error('caste') is-invalid @enderror" name="caste" value="{{ old('caste') }}" required autocomplete="caste" autofocus>

                                            @error('caste')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="originaladdress" class="col-md-4 col-form-label text-md-right">{{ __('Original Address') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="aoriginaladdressme" type="text" class="form-control @error('originaladdress') is-invalid @enderror" name="originaladdress" value="{{ old('originaladdress') }}" required autocomplete="originaladdress" autofocus></textarea>

                                            @error('originaladdress')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lokshabha" class="col-md-4 col-form-label text-md-right">{{ __('LokShabha') }}</label>

                                        <div class="col-md-6">
                                            <input id="lokshabha" type="text" class="form-control @error('lokshabha') is-invalid @enderror" name="lokshabha" value="{{ old('lokshabha') }}" required autocomplete="lokshabha" autofocus>

                                            @error('lokshabha')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="vidhansabha" class="col-md-4 col-form-label text-md-right">{{ __(' Vidhansabha') }}</label>

                                        <div class="col-md-6">
                                            <input id="vidhansabha" type="text" class="form-control @error('vidhansabha') is-invalid @enderror" name="vidhansabha" value="{{ old('vidhansabha') }}" required autocomplete="vidhansabha" autofocus>

                                            @error('vidhansabha')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="panchayat" class="col-md-4 col-form-label text-md-right">{{ __(' Panchayat') }}</label>

                                        <div class="col-md-6">
                                            <input id="panchayat" type="text" class="form-control @error('panchayat') is-invalid @enderror" name="panchayat" value="{{ old('panchayat') }}" required autocomplete="panchayat" autofocus>

                                            @error('panchayat')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="officename" class="col-md-4 col-form-label text-md-right">{{ __(' Office / Business Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="officename" type="text" class="form-control @error('officename') is-invalid @enderror" name="officename" value="{{ old('officename') }}" required autocomplete="officename" autofocus>

                                            @error('officename')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="officeaddress" class="col-md-4 col-form-label text-md-right">{{ __(' Office / business address') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="officeaddress" type="text" class="form-control @error('officeaddress') is-invalid @enderror" name="officeaddress" value="{{ old('officeaddress') }}" required autocomplete="officeaddress" autofocus></textarea>

                                            @error('officeaddress')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Type or category Of Business ') }}</label>

                                        <div class="col-md-6">
                                            <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

                                            @error('category')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="celeb" class="col-md-4 col-form-label text-md-right">{{ __(' Are You a Celebrity Or VIP IPS ? ') }}</label>

                                        <div class="col-md-6">
                                            <input id="celeb" type="checkbox" class="form-check-input @error('name') is-invalid @enderror" name="celeb" value="{{ old('celeb') }}" required autocomplete="celeb" autofocus>

                                            @error('celeb')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Create Profile ') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
