@extends('layouts.admin')
@section('content-admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-0">
                <div class="col-md-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Add To Special Category ') }}</div>
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                    <tr>
                                        <th> Id</th>
                                        <th> Name </th>
                                        <th>Email </th>
                                        <th> Mobile </th>
                                        <th>Manage</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($profiles)>0)
                                        @foreach($profiles as $profile)
                                            <tr>
                                                <td> {{ $profile->id }}</td>
                                                <td>{{ $profile->name }}</td>
                                                <td>{{ $profile->email }}</td>
                                                <td>{{ $profile->mobile }}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('specialCategory.store') }}">
                                                        @csrf
                                                        <input type="hidden" value="{{ $profile->id }}" name="profile_id" id="profile_id">
                                                        <input type="hidden" value="{{ $profile->user_id }}" name="user_id" id="user_id">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <select name="special_category_name" id="special_category_name" class="form-control @error('name') is-invalid @enderror" required>
                                                                    <option selected>Choose Category</option>
                                                                    <option value="Elite Aggrawals">Elite Aggrawals</option>
                                                                    <option value="Great Personality">Great Personality</option>
                                                                    <option value="Offers">Offers</option>
                                                                    <option value="Shradhnajali">Shradhnajali</option>
                                                                    <option value="Education">Education</option>
                                                                    <option value="News">News</option>
                                                                    <option value="Promotions">Promotions</option>
                                                                </select>
                                                                @error('category')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <textarea id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" placeholder="Enter Some Details here" name="comment" value="{{ old('comment') }}" required autocomplete="comment"></textarea>
                                                                @error('comment')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-12 ">
                                                                <button type="submit" class="btn btn-outline-primary">
                                                                    <img src="https://image.flaticon.com/icons/svg/1897/1897795.svg" style="height: 30px; width: 30px;" alt="">
                                                                    {{ __('Add to Special Category') }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @else
                                        <p class="alert alert-danger m-2">
                                            Nothing to Show
                                        </p>
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
