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

                                    <p>
                                    <h3 style="text-align:center">Delivery Companies is : </h3>
                                    <h3 style="text-align:center">>
                                        <select>
                                            <option value="Select">Select</option>
                                            <option value="Vineet">company-1</option>
                                            <option value="Sumit">company-2</option>
                                            <option value="Dorilal">company-3</option>
                                        </select>
                                        </p>

                                        <form>
                                            <h2> To add another company, please click here : <input type="submit" name="add"
                                                    class="button" value="add" />

                                            </h2>
                                            <h2>To delete a company, please click here : <input type="submit" name="delet"
                                                    class="button" value="delet" />
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
