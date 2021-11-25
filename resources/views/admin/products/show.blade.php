@extends('layouts.app', ['activePage' => 'product', 'titlePage' => 'Products'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-danger">
                        <h1 style="text-align:center">Products</h1>
                        <h3 style="text-align:center">Transport company data</h3>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="iframe-container d-none d-lg-block">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
