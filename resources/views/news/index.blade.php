@extends('layouts.admin')
@section('content-admin')

    <div class="container">
        <div class="row">
            @foreach($newses as $news)
                <div class="col-md-3  p-2">
                    <a href="{{ route('news.show',$news->slug) }}">
                        <div class="bg-white p-1">
                            <img src="{{ url('images/').'/news/'.$news->thumbnail }}" alt="" class="w-100" style="height: 180px;">
                            <h6 class="my-2"> {{ $news->name }} </h6>
                            <p>  {!! \Illuminate\Support\Str::words($news->details, 10) !!} </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
