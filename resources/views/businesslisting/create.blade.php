@extends('layouts.admin')
@section('content-admin')

    <div class="container">
        <div class="row">
            <div class="col-md ">
                <div class="card">
                    <div class="card-header">{{ __('Add Listing') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('businesslisting.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="name" type="text" placeholder="Listing Name " class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="category_id" class="col-md-12 col-form-label text-md-left">{{ __('Category Name') }}</label>
                                                <div class="col-md-12">
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

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="tag_id" class="col-md-12 col-form-label text-md-left">{{ __('Tag Name') }}</label>
                                                <div class="col-md-12">
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="opening_time" class="col-md-12 col-form-label text-md-left">{{ __(' Opening Time') }} <span class="bg-c-red">Mention am/pm</span></label>
                                                <div class="col-md-12">
                                                    <input id="opening_time" type="time" class="form-control @error('opening_time') is-invalid @enderror" name="opening_time" value="{{ old('opening_time') }}" required  autocomplete="opening_time" autofocus>
                                                    @error('opening_time')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="closing_time" class="col-md-12 col-form-label text-md-left">{{ __(' Closing time ') }} <span class="bg-c-red">Mention am/pm</span></label>

                                                <div class="col-md-12">
                                                    <input id="closing_time" type="time" class="form-control @error('closing_time') is-invalid @enderror" name="closing_time" value="{{ old('closing_time') }}" required autocomplete="closing_time"  autofocus>
                                                    @error('closing_time')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="image" class="col-md-12 col-form-label text-md-left">{{ __('Image') }}</label>
                                        <div class="col-md-12">
                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <h5>Listing Address</h5>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group row">
                                                <label for="address" class="col-md-12 col-form-label text-md-left">{{ __('Address') }}</label>
                                                <div class="col-md-12">
                                                    <textarea id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus></textarea>
                                                    @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-md-12 col-form-label text-md-left">{{ __('City ') }}</label>
                                                <div class="col-md-12">
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
                                                <label for="area" class="col-md-12 col-form-label text-md-left">{{ __('Area') }}</label>
                                                <div class="col-md-12">
                                                    <textarea id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" required autocomplete="area" autofocus></textarea>
                                                    @error('area')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pincode" class="col-md-12 col-form-label text-md-left">{{ __('Pincode') }}</label>
                                                <div class="col-md-12">
                                                    <input id="pincode" type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ old('pincode') }}" required autocomplete="pincode" autofocus>
                                                    @error('pincode')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group row">
                                                <label for="" class="col-md-12 col-form-label text-md-left">{{ __('Price Rs.') }}</label>
                                                <div class="col-md-12">
                                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">
                                                    @error('price')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md">
                                            <div class="form-group row">
                                                <label for="video" class="col-md-12 col-form-label text-md-left">{{ __('Video Link') }} <span class="bg-c-red p-1">Please only enter embed url</span></label>
                                                <div class="col-md-12">
                                                    <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}" required autocomplete="video" autofocus>
                                                    @error('video')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-12 col-form-label text-md-left">{{ __('Listing  Description') }}</label>
                                <div class="col-md-12">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description"> Write Your Listing Details here </textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                            <h3 class="my-2"> Meta Details </h3>
                            <div class="row my-4">
                                  <div class="col-md">
                                      <div class="row">
                                          <div class="col-md">
                                              <div class="form-group row">
                                                  <div class="col-md-12">
                                                      <input id="meta_title" type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" value="{{ old('meta_title') }}" placeholder="Meta Title" autocomplete="meta_title" autofocus>
                                                      @error('meta_title')
                                                      <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md">
                                              <div class="form-group row">
                                                  <div class="col-md-12">
                                                      <input id="meta_tags" type="text" class="form-control @error('meta_tags') is-invalid @enderror" name="meta_tags" value="{{ old('meta_tags') }}" placeholder="Meta Tags"  autocomplete="meta_tags" autofocus>
                                                      @error('meta_tags')
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
                                              <textarea id="meta_description" type="text" class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" value="{{ old('meta_description') }}"  autocomplete="meta_description" autofocus placeholder="Meta Description">  </textarea>
                                              @error('meta_description')
                                              <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                              @enderror
                                          </div>
                                      </div>

                                  </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Listing') }}
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
