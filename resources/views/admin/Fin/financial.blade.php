@extends('layouts.app', ['activePage' => 'financial-statement', 'titlePage' => 'Financial Statement'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h1 style="text-align:center">Financial Statement</h1>
                        <h3 style="text-align:center">financial reports</h3>
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="iframe-container d-none d-lg-block">
                                    <div class="alert alert-primary" role="alert">
                                        <a href="/activearea" class="alert-link"> Most Activate Areas</a>.

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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="iframe-container d-none d-lg-block">
                                    <div class="alert alert-success" role="alert">
                                        <a href="/sales" class="alert-link ">sales</a>.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
