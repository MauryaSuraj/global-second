@extends('layouts.user')
@section('content')
    <div class="container mt-5">

        <div class="col-md-12">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        @foreach($memberdetails as $memberdetail)
            <div class="d-flex justify-content-end mb-2">
                <a href="{{ route('listing.create') }}" class="btn btn-light mt-5 mx-2"><i class="fas fa-plus"></i> Add Listing</a>
                <a href="{{ route('membershipdetail.edit',$memberdetail->id ) }}" class="btn mt-5 btn-light"><i class="fas fa-user-edit"></i> Edit Profile</a>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <img class="img-fluid h-auto rounded" src="@if(!$memberdetail->image) {{ '/assets/img/noimage.png' }} @else {{ url('images/').'/profile/'.$memberdetail->image }} @endif " alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="h3"><i class="fas fa-user-shield mx-3"></i> Personal Details </h4>
                            <hr>
                            <h3>Name: <span>{{ $memberdetail->name }}</span></h3>
                            <p>Joining Time : <span> <i class="fas fa-user-clock text-danger mx-2 "></i> {{ $memberdetail->created_at }}</span></p>

                        </div>
                        <div class="col-md-12">
                            <h4 class="h3"><i class="fas fa-map-marker-alt mx-3"></i>  Address  </h4>
                            <hr>
                            <div class="row">
                            <div class="col-md">
                                <p> <strong>Address : </strong>  {{ $memberdetail->address }} </p>
                                <p> <strong>Pincode :</strong>  {{ $memberdetail->pincode }} </p>
                                <p><strong>Fax :</strong>   {{ $memberdetail->fax }}</p>
                                <p><strong>Mobile No. :</strong>   {{ $memberdetail->mobile }}</p>
                                <p><strong>E-mail :</strong>  {{ $memberdetail->email }}</p>
                                <p> <strong>Date Of Birth :</strong>   {{ $memberdetail->birthdate }}  </p>
                            </div>
                            <div class="col-md">
                                <p><strong>Caste : </strong>  {{ $memberdetail->caste }}</p>
                                <p><strong>Original Place :</strong>   {{ $memberdetail->originalplace }}</p>
                                <p><strong>Lokshabha : </strong>  {{ $memberdetail->loksabha }}</p>
                                <p><strong>VidhanShabha :</strong>   {{ $memberdetail->vidhansabha }}</p>
                                <p><strong>Panchayat :</strong> {{ $memberdetail->panchayat }}</p>
                            </div>
                        </div>
                            <h4 class="h3"><i class="fas fa-business-time"></i>  Business Details   </h4>
                            <hr>
                            <div class="row">
                                <div class="col-md">
                                    <p><strong> Business / Office Name :</strong>   {{ $memberdetail->businessname }}</p>
                                    <p> <strong>Business / Office Name :</strong>  {{ $memberdetail->officeaddress }} </p>
                                    <p><strong>Business Category :</strong> {{ $memberdetail->category_id }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="row">
               <div class="col-md">
                   <h4 class="h3"><i class="fas fa-business-time"></i>  Family Member Details   </h4>
                   <hr>
               </div>
                <div class="col-md-12">

                    <div class="table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Birthdate </th>
                                <th>Added At</th>
                                <th>Membership</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($familyDetails)>0)
                                @foreach($familyDetails as $familyDetail)
                                    <tr>
                                        <td>{{ $familyDetail->fullaname }}</td>
                                        <td>{{ $familyDetail->birthdate }}</td>
                                        <td>{{ $familyDetail->created_at }}</td>
                                        <td>@if($familyDetail->is_member == 0) No @else Yes @endif  </td>
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
@endsection

