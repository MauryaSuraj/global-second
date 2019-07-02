@extends('layouts.user')
@section('content')
    <div class="container">
        <div class="">
            <div class="col-md ">
                <div class="card">
                    <div class="card-header">{{ __('Family Details') }}</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('family.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md">
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
                                        <label for="married" class="col-md-4 col-form-label text-md-right">{{ __('Married / UnMarried') }}</label>
                                        <div class="col-md-6">
                                            <select name="married" id="married" class="form-control @error('married') is-invalid @enderror" autofocus required>
                                                <option value="married">Married</option>
                                                <option value="unmarried">UnMarried</option>
                                                <option value="divorced">Divorced</option>
                                            </select>
                                            @error('married')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary ">
                                                {{ __('Add Family Member ') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
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
