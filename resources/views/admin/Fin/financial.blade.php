@extends('layouts.app', ['activePage' => 'financial-statement', 'titlePage' => 'Dashboard'])

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <h1 style="text-align:center">Financial Statement</h1>
                </div>
            </div>
            {{-- navbar-product --}}
            <div class=" col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">

                                        <i class="material-icons">sell</i>PRODUCT
                                        <div class="ripple-container"></div>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- /navbar-product --}}
                {{-- product --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-chart">
                            <div class="card-header card-header-success">
                                <div class="ct-chart" id="dailySalesChart"></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Daily profite</h4>
                                <p class="card-category">
                                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span>
                                    increase in today sales.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-chart">
                            <div class="card-header card-header-warning">
                                <div class="ct-chart" id="websiteViewsChart"></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Monthly profite</h4>
                                <p class="card-category">
                                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span>
                                    increase in today sales.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-chart">
                            <div class="card-header card-header-danger">
                                <div class="ct-chart" id="completedTasksChart"></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Annual profite</h4>
                                <p class="card-category">
                                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span>
                                    increase in today sales.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /Products --}}
            {{-- navbar-Profite --}}
            <div class=" col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">

                                        <i class="material-icons">sell</i>PROFIT
                                        <div class="ripple-container"></div>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- /navbar-Profite --}}
                {{-- Profite --}}
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons"></i>
                                </div>
                                <p class="card-category">Revenue</p>
                                <h3 class="card-title">$34,245</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Last 24 Hours
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /Profite --}}
                {{-- navbar-User --}}
                <div class=" col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">

                                            <i class="material-icons">person</i>USERS
                                            <div class="ripple-container"></div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- /navbar-User --}}
                    {{-- Visitor --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons"></i>
                                    </div>
                                    <p class="card-category">Visitor</p>
                                    <h3 class="card-title">34,245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- registered Users --}}
                        <div class="col-md-4">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <p class="card-category">Registered Users</p>
                                    <h3 class="card-title">4900
                                        <small>user</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">info</i>
                                        <a href="#pablo">Get the detials...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Company --}}
                        <div class="col-md-4">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons"></i>
                                    </div>
                                    <p class="card-category">Delivery Company</p>
                                    <h3 class="card-title">75</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i>
                                        <a href="#pablo">Get the detials...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- /User --}}
                    {{-- navbar-Active area --}}
                    <div class=" col-md-12">
                        <div class="card">
                            <div class="card-header card-header-tabs card-header-primary">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="nav-item">

                                                <i class="material-icons">place</i>PLACES
                                                <div class="ripple-container"></div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /navbar-Active area --}}
                        {{-- Country --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">flag</i>
                                        </div>
                                        <p class="card-category">Country</p>
                                        <h3 class="card-title">Syria</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">date_range</i> Last 24 Hours
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- city --}}
                            <div class="col-md-4">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">place</i>
                                        </div>
                                        <p class="card-category">city</p>
                                        <h3 class="card-title">4900
                                            <small>user</small>
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-danger">info</i>
                                            <a href="#pablo">Get the detials...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Area --}}
                            <div class="col-md-4">
                                <div class="card card-stats">
                                    <div class="card-header card-header-danger card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">place</i>
                                        </div>
                                        <p class="card-category">Area</p>
                                        <h3 class="card-title">75</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">local_offer</i>
                                            <a href="#pablo">Get the detials...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        {{-- <div class="card" style="width: 20rem;">
                                    <div class="center"><img class="card-img-top"
                                            src="https://www.clipartmax.com/png/small/306-3064329_degree-in-banking-and-finance-logo-political-icon-png-hd.png"
                                            rel="nofollow" alt="Card image cap">
                                        <div class="card-body">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <div class="iframe-container d-none d-lg-block">
                                                    <div class="alert alert-primary" role="alert">
                                                        <a href="/activearea" class="alert-link"> Most Activate
                                                            Areas</a>.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <div class="iframe-container d-none d-lg-block">
                                                    <div class="alert alert-info" role="alert">
                                                        <a href="/profite" class="alert-link"> Profite From ADS</a>.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
