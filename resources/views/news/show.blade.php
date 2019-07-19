@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-md-3 mt-5">
                <ul class="list-group">
                    @foreach($recent_news as $recent_new)
                        <li class="list-group-item"><img src="https://image.flaticon.com/icons/svg/1974/1974876.svg" class="m-1" style="height: 15px; width: 15px;" alt="">
                            <a href="{{  route('news.show',$recent_new->slug) }}">{{ $recent_new->name }}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="mt-5 col-md-12">
                        <h1 class="h1 my-2">{{ $news->name }}</h1>
                        <img src="{{ url('images/').'/news/'.$news->image }}" class="w-100 text-center my-2" alt="">
                        <div>
                            {!! $news->details !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
