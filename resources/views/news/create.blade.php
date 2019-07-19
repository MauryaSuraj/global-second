@extends('layouts.admin')
@section('content-admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Add News') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus placeholder="News Title">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    {{--                                    <textarea id="content" placeholder="type your Content here " type="text" class="form-control" name="content" required autocomplete="content"></textarea>--}}
                                    <textarea class="form-control" id="editor1" name="editor1" placeholder="News Details Here">Remove Me To Place Your content Here,<br> If You Want Extra Styling Just Add Bootstrap Classes </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group row">
                                        <label for="mainimage" class="col-md-4 col-form-label text-md-right">{{ __('Main Image ') }}</label>
                                        <div class="col-md-6">
                                            <input id="mainimage" type="file" class="form-control @error('mainimage') is-invalid @enderror" name="mainimage" required autocomplete="mainimage">
                                            @error('mainimage')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group row">
                                        <label for="thumbimage" class="col-md-4 col-form-label text-md-right">{{ __('Thumbnail  Image') }}</label>
                                        <div class="col-md-6">
                                            <input id="thumbimage" type="file" class="form-control" name="thumbimage" required autocomplete="thumbimage">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="offset-md-4 col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit News') }}
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
