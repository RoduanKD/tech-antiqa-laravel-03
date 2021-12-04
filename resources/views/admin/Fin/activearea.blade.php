@extends('layouts.app', ['activePage' => 'financial-statement', 'titlePage' => ''])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h1 style="text-align:center">Financial Statement</h1>
                        <h3 style="text-align:center"> Most Activ Areas</h3>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="card card-chart">
                    <div class="card-header card-header-rose" data-header-animation="20">
                        <div class="ct-chart" id="websiteViewsChart"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>

                            <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom"
                                title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom"
                                title="Change Date">
                                <i class="material-icons">edit</i>
                            </button>
                        </div>
                        <h4 class="card-title">Website Views</h4>
                        <p class="card-category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>

        @endsection
