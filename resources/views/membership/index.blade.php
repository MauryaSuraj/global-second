@extends('layouts.admin')
@section('content-admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            <div class="card col-md">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th>#  Id</th>
                                <th>User  Name </th>
                                <th>User Email</th>
                                <th>User Created At</th>
                                <th>MemberShip Status </th>
                                <th>Confirm Payment</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($memberships as $membership)
                                <tr>
                                    <td>{{ $membership->id }}</td>
                                    <td>{{ $membership->user->name }}</td>
                                    <td>{{ $membership->user->email }}</td>
                                    <td>{{ $membership->created_at }}</td>
                                    <td>{{ $membership->membership_status }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('membership.update',$membership->id) }}">
                                            @csrf
                                            @method('PATCH')

                                                        @if($membership->membership_status == 'unpaid')
                                                            <button class="btn btn-primary" type="submit"> Accept Payment </button>
                                                            @else
                                                            <button class="btn btn-success" type="submit"> Decline Membership </button>
                                                            @endif
                                        </form>
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
