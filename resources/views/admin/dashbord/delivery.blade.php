@extends('layouts.app', ['activePage' => 'delivery-company', 'titlePage' => 'delivery company'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
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
                                                <th class="text-right">earnings</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Company-1</td>
                                                <td>Hamah</td>
                                                <td>2013</td>
                                                <td class="text-right">&euro; 99,225</td>
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
                                                <td class="text-center">2</td>
                                                <td>Company-2</td>
                                                <td>Aleppo</td>
                                                <td>2012</td>
                                                <td class="text-right">&euro; 89,241</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-round">
                                                        <i class="material-icons">book</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Company-3</td>
                                                <td>Homs</td>
                                                <td>2010</td>
                                                <td class="text-right">&euro; 92,144</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                                        <i class="material-icons">book</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <form>
                                        <h2>To add another company</h2><br>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter email">
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your
                                                    email with anyone else.</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">contact number</label>
                                                <input type="contact number" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="contact number" placeholder="Enter contact number">
                                                <small id="contact number" class="form-text text-muted">We'll never share
                                                    your number with anyone else</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Regions</label>
                                                <input type="Regions" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="RegionsHelp" placeholder="Covered areas is :">
                                                <small id="RegionsHelp" class="form-text text-muted"></small>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    Confirm adding the company
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </form>

                                    </form>

                                    </h2>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
