@extends('layouts.admin')
@section('content-admin')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add Matrimony Profile') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('matrimony.store') }}">
                            @csrf
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Matrimony Profile For') }}</label>
                                    <div class="col-md-6">
                                        <select name="profilefor" id="profilefor"    class="form-control @error('profilefor') is-invalid @enderror" required>
                                            <option value="self"> Self</option>
                                            <option value="Son">Son</option>
                                            <option value="Daughter">Daughter</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Sister">Sister</option>
                                            <option value="Relative">Relative</option>
                                            <option value="Friend">Friend</option>
                                        </select>
                                        @error('profilefor')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('profilefor')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                    <div class="col-md-6">
                                        <select name="gender" id="gender"    class="form-control @error('gender') is-invalid @enderror" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="complexion" class="col-md-4 col-form-label text-md-right">{{ __('Complexion ') }}</label>
                                    <div class="col-md-6">
                                        <input id="complexion" type="text"  class="form-control @error('complexion') is-invalid @enderror" name="complexion" value="{{ old('complexion') }}" required autocomplete="complexion" autofocus>
                                        @error('complexion')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="marital" class="col-md-4 col-form-label text-md-right">{{ __('Marital Status  ') }}</label>
                                    <div class="col-md-6">
                                        <input id="marital" type="text"  class="form-control @error('marital') is-invalid @enderror" name="marital" value="{{ old('marital') }}" required autocomplete="marital" autofocus>
                                        @error('marital')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>



                            </div>
                            <div class="col-md">

                                <div class="form-group row">
                                    <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>
                                    <div class="col-md-6">
                                        <input id="date_of_birth" type="date" value="2013-01-08" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>
                                        @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion ') }}</label>
                                    <div class="col-md-6">
                                        <input id="religion" type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}" required autocomplete="religion" autofocus>
                                        @error('religion')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="moon" class="col-md-4 col-form-label text-md-right">{{ __('Moon sign') }}</label>
                                    <div class="col-md-6">
                                        <input id="moon" type="text"  class="form-control @error('moon') is-invalid @enderror" name="moon" value="{{ old('moon') }}" required autocomplete="moon" autofocus>
                                        @error('moon')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mother_toungue" class="col-md-4 col-form-label text-md-right">{{ __('Mother Tongue ') }}</label>
                                    <div class="col-md-6">
                                        <input id="mother_toungue" type="text" class="form-control @error('mother_toungue') is-invalid @enderror" name="mother_toungue" value="{{ old('mother_toungue') }}" required autocomplete="mother_toungue" autofocus>
                                        @error('mother_toungue')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="salary" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>
                                    <div class="col-md-6">
                                        <input id="salary" type="text"  class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ old('salary') }}" required autocomplete="salary" autofocus>
                                        @error('salary')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">

                                <div class="form-group row">
                                    <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No.') }}</label>
                                    <div class="col-md-6">
                                        <input id="mobile_no" type="text"  class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('mobile_no') }}" required autocomplete="mobile_no" autofocus>
                                        @error('mobile_no')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email ') }}</label>
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
                                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age ') }}</label>
                                    <div class="col-md-6">
                                        <input id="age" type="number" min="20" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
                                        @error('age')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('Height ') }}</label>
                                    <div class="col-md-6">
                                        <input id="height" type="text"  class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height') }}" required autocomplete="height" autofocus>
                                        @error('height')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sun" class="col-md-4 col-form-label text-md-right">{{ __('Sun sign') }}</label>
                                    <div class="col-md-6">
                                        <input id="sun" type="text"  class="form-control @error('sun') is-invalid @enderror" name="sun" value="{{ old('sun') }}" required autocomplete="sun" autofocus>
                                        @error('sun')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="education" type="text" placeholder="Education Details" class="form-control @error('education') is-invalid @enderror" name="education" value="{{ old('education') }}" required autocomplete="education"></textarea>
                                    @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="location" placeholder="Location Details" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location"></textarea>
                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="profession" placeholder="Profession Details" type="text" class="form-control @error('profession') is-invalid @enderror" name="profession" value="{{ old('profession') }}" required autocomplete="profession"></textarea>
                                    @error('profession')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="family" type="text" placeholder="Family Background" class="form-control @error('family') is-invalid @enderror" name="family" value="{{ old('family') }}" required autocomplete="family"></textarea>
                                    @error('family')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="partner" type="text" placeholder="Partner Expectation " class="form-control @error('partner') is-invalid @enderror" name="partner" value="{{ old('partner') }}" required autocomplete="partner"></textarea>
                                    @error('partner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Profile') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
