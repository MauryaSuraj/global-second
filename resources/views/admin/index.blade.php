@extends('layouts.admin')
@section('content-admin')

    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">

                    <div class="col-xl-8 col-md-12">
                        <div class="card sale-card">
                            <div class="card-header">
                                <h5>Deals Analytics</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div id="allocation-map" class="chart-shadow" style="height:215px"></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div id="allocation-chart" class="chart-shadow" style="height:215px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card prod-p-card card-red">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Total Listing</h6>
                                        <h3 class="m-b-0 f-w-700 text-white">{{ \App\BussinessListing::count() }}</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list text-c-red f-18"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card prod-p-card card-blue">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Total Registration</h6>
                                        <h3 class="m-b-0 f-w-700 text-white">{{ \App\MemberShipFront::count() }}</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-database text-c-blue f-18"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-xl-12">
                        <div class="card product-progress-card">
                            <div class="card-block">
                                <div class="row pp-main">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="pp-cont">
                                            <div class="row align-items-center m-b-20">
                                                <div class="col-auto">
                                                    <i class="fas fa-cube f-24 text-mute"></i>
                                                </div>
                                                <div class="col text-right">
                                                    <h2 class="m-b-0 text-c-blue">{{ \App\Reviews::count() }}</h2>
                                                </div>
                                            </div>
                                            <div class="row align-items-center m-b-15">
                                                <div class="col-auto">
                                                    <p class="m-b-0">Total Reviews</p>
                                                </div>
                                                <div class="col text-right">
                                                    <p class="m-b-0 text-c-blue"><i class="fas fa-long-arrow-alt-up m-r-10"></i>{{ \App\Reviews::count() }}</p>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-blue" style="width:45%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="pp-cont">
                                            <div class="row align-items-center m-b-20">
                                                <div class="col-auto">
                                                    <i class="fas fa-tag f-24 text-mute"></i>
                                                </div>
                                                <div class="col text-right">
                                                    <h2 class="m-b-0 text-c-red">{{ \App\ContactFormListing::count() }}</h2>
                                                </div>
                                            </div>
                                            <div class="row align-items-center m-b-15">
                                                <div class="col-auto">
                                                    <p class="m-b-0">Business Listing Enquiry</p>
                                                </div>
                                                <div class="col text-right">
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-red" style="width:75%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="pp-cont">
                                            <div class="row align-items-center m-b-20">
                                                <div class="col-auto">
                                                    <i class="fas fa-random f-24 text-mute"></i>
                                                </div>
                                                <div class="col text-right">
                                                    <h2 class="m-b-0 text-c-yellow">{{ \App\FeaturedMember::count() }}</h2>
                                                </div>
                                            </div>
                                            <div class="row align-items-center m-b-15">
                                                <div class="col-auto">
                                                    <p class="m-b-0">Featured Members</p>
                                                </div>
                                                <div class="col text-right">
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-yellow" style="width:65%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="pp-cont">
                                            <div class="row align-items-center m-b-20">
                                                <div class="col-auto">
                                                    <i class="fas fa-dollar-sign f-24 text-mute"></i>
                                                </div>
                                                <div class="col text-right">
                                                    <h2 class="m-b-0 text-c-green">{{ \App\FeaturedMember::count() }}</h2>
                                                </div>
                                            </div>
                                            <div class="row align-items-center m-b-15">
                                                <div class="col-auto">
                                                    <p class="m-b-0">Featured Listing</p>
                                                </div>
                                                <div class="col text-right">
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-green" style="width:35%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-12 col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Most Viewed Listing</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                        <li><i class="feather icon-trash close-card"></i></li>
                                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0  table-borderless">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name </th>
                                            <th>Price </th>
                                            <th>Posted By</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <h6>Able Pro</h6>
                                                    <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                                </div>
                                            </td>
                                            <td>16,300</td>
                                            <td>
                                                <div id="app-sale1" style="height:50px"></div>
                                            </td>
                                            <td>$53</td>
                                            <td class="text-c-blue">$15,652</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <h6>Photoshop</h6>
                                                    <p class="text-muted m-b-0">Design Software</p>
                                                </div>
                                            </td>
                                            <td>26,421</td>
                                            <td>
                                                <div id="app-sale2" style="height:50px"></div>
                                            </td>
                                            <td>$35</td>
                                            <td class="text-c-blue">$18,785</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <h6>Flatable</h6>
                                                    <p class="text-muted m-b-0">Admin App</p>
                                                </div>
                                            </td>
                                            <td>10,652</td>
                                            <td>
                                                <div id="app-sale4" style="height:50px"></div>
                                            </td>
                                            <td>$20</td>
                                            <td class="text-c-blue">$7,856</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection
