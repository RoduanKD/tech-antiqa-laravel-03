@extends('layouts.app', ['activePage' => 'delivery-company', 'titlePage' => ''])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-danger">
                        <h1 style="text-align:center">Delivery Companies</h1>
                        <h3 style="text-align:center">Transport company data</h3>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="iframe-container d-none d-lg-block">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th>Regions</th>
                                                <th>Since</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        @foreach ($deliveries as $delivery)
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>{{ $delivery->name }}</td>
                                                    <td>{{ $delivery->area->name }}</td>
                                                    <td>{{ $delivery->created_at }}</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" class="btn btn-info">
                                                            <i class="material-icons">book</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" class="btn btn-success">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" class="btn btn-danger">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                        @endforeach
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
