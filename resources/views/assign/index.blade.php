@extends('layouts.admin')
@section('content-admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4> User Having Admin controls</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Tags  </h5>
                        <div class="card-header-right">
                            Assign Admin Role
                        </div>
                    </div>
                    <div class="card-block p-b-0">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                <tr>
                                    <th> Id</th>
                                    <th>Admin  Name </th>
                                    <th>Email</th>
                                    <th>controls</th>
                                    <th>Change Privilege </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($admin_users)>0)
                                    @foreach($admin_users as $tag)
                                        <tr>
                                            <td>{{ $tag->id }}</td>
                                            <td>{{ $tag->name }}</td>
                                            <td>
                                                {{ $tag->email }}
                                            </td>
                                            <td> {{ $tag->user_role }} </td>
                                            <td>
                                                <form method="POST" action="{{ route('assign.update', $tag->id) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="form-group row">
                                                        <div class="col-md">
                                                            <select name="role_assign" id="role_assign" class="form-control dropdown">
                                                                <option value="{{ $tag->user_role }}" selected> {{ $tag->user_role }} </option>
                                                                <option class="dropdown-item" value="admin">Admin</option>
                                                                <option  class="dropdown-item" value="user">User</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Assign') }}
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
