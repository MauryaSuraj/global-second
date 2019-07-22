@extends('layouts.admin')
@section('content-admin')

    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1>
                   Banners
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Banners   </h5>
                        <div class="card-header-right">
                            <a href="/admin/banners/create" class="btn btn-outline-primary">Add Banner</a>
                        </div>
                    </div>
                    <div class="card-block p-b-0">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                <tr>
                                    <th>Banner Id</th>
                                    <th>Title </th>
                                    <th>Banner</th>
                                    <th>Uploaded at</th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($banners)>0)
                                    @foreach($banners as $tag)
                                        <tr>
                                            <td>{{ $tag->id }}</td>
                                            <td>{{ $tag->title }}</td>
                                            <td><img src="{{ url('images/').'/appBanners/'.$tag->image }}" class="w-100" alt=""></td>
                                            <td>{{ $tag->created_at }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('banners.update', $tag->id) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="d-flex">
                                                        <button type="submit" class="btn @if($tag->status == 0 ) btn-outline-danger @else btn-outline-success @endif">
                                                            @if($tag->status == 0 ) Activate @else Deactivate @endif
                                                        </button>
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
