@extends('layouts.app', ['activePage' => 'delivery-company', 'titlePage' => 'delivery company'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h1 style="text-align:center">Add Delivery Company</h1>
                        <h3 style="text-align:center">To add new carriers</h3>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="iframe-container d-none d-lg-block">
                                </div>

                                <form>
                                    <h2>Add company information</h2><br>
                                    <form>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> contact number </label>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
