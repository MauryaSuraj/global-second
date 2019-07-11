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
                    <div class="card-header">{{ __('Add Profile To Supporter ') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name </th>
                                    <th>Email </th>
                                    <th>Mobile </th>
                                    <th>Manage</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($profiles)>0)
                                    @foreach($profiles as $profile)
                                        <tr>
                                            <td>{{ $profile->id }}</td>
                                            <td>{{ $profile->name }}</td>
                                            <td>{{ $profile->email }}</td>
                                            <td>{{ $profile->mobile }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('support.store') }}">
                                                    @csrf
                                                    <input type="hidden" value="{{ $profile->id }}" name="profile_id" id="profile_id">
                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-12 ">
                                                            <button type="submit" class="btn">
                                                                <img src="https://image.flaticon.com/icons/svg/109/109433.svg" style="height: 30px; width: 30px;" alt="">
                                                                {{ __('Add') }}
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
