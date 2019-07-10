@extends('layouts.user')
@section('content')
    <div class="container mt-5">
        <div class="row mt-4">
            <div class="col-md ">
                <div class="card">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                        @if(session()->has('status'))
                            <div class="alert alert-success">
                                {{ session()->get('status') }}
                            </div>
                        @endif
                    <div class="card-header">{{ __('ListingOLD') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('businesslisting.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' Name') }}</label>
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
                                        <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>
                                        <div class="col-md-6">
                                            <select id="category_id" type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ old('category_id') }}" required autocomplete="category_id" autofocus>
                                                <option value="0" disabled >Select an Option</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tag_id" class="col-md-4 col-form-label text-md-right">{{ __('Tag Name') }}</label>
                                        <div class="col-md-6">
                                            <select id="tag_id" type="text" class="form-control @error('tag_id') is-invalid @enderror" name="tag_id" value="{{ old('tag_id') }}" required autocomplete="tag_id" autofocus>
                                                <option value="0" disabled >Select an Option</option>
                                                @foreach($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                            </select>

                                            @error('tag_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __(' Description') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description"></textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">
                                            @error('image')
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
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('City ') }}</label>
                                        <div class="col-md-6">
                                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="name" autofocus>
                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group row">
                                        <label for="opening_time" class="col-md-4 col-form-label text-md-right">{{ __(' Opening Time') }} <span class="bg-c-red">Mention am/pm</span></label>
                                        <div class="col-md-6">
                                            <input id="opening_time" type="text" class="form-control @error('opening_time') is-invalid @enderror" name="opening_time" value="{{ old('opening_time') }}" required autocomplete="opening_time" autofocus>
                                            @error('opening_time')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="closing_time" class="col-md-4 col-form-label text-md-right">{{ __(' Closing time ') }} <span class="bg-c-red">Mention am/pm</span></label>

                                        <div class="col-md-6">
                                            <input id="closing_time" type="text" class="form-control @error('closing_time') is-invalid @enderror" name="closing_time" value="{{ old('closing_time') }}" required autocomplete="closing_time" autofocus>
                                            @error('closing_time')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Price Rs.') }}</label>

                                        <div class="col-md-6">
                                            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">
                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Video Link') }}</label>

                                        <div class="col-md-6">
                                            <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}" required autocomplete="video" autofocus>

                                            @error('video')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>
                                        <div class="col-md-6">
                                            <input id="pincode" type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ old('pincode') }}" required autocomplete="pincode" autofocus>
                                            @error('pincode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>
                                        <div class="col-md-6">
                                            <textarea id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" required autocomplete="area" autofocus></textarea>
                                            @error('area')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Add Listing ') }}
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
