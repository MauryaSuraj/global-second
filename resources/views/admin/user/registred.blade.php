@extends('layouts.admin')
@section('content-admin')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h1>

                    </h1>
                    <div class="table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th>User Id</th>
                                <th>User  Name </th>
                                <th>User Email</th>
                                <th>User Created At</th>
                                <th>MemberShip Status </th>
                                <th>Manage</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>Un paid</td>
                                    <td>
                                        <a href="#">Confirm Payment</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
