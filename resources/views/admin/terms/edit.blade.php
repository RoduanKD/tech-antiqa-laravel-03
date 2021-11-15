@extends('layouts.app', ['activePage' => 'terms', 'titlePage' => 'Terms'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h1 style="text-align:center">Terms of use Tech Anticqa</h1>
                        <h5> Please read these terms of use carefully before using this website, and that by using this
                            website, you agree to these terms of use and the current terms of use will be modified from time
                            to time.
                            Each time you wish to use our website, please review the current Terms of Use to ensure that you
                            understand the terms. </h5>
                    </div>

                    <div class="col-md-14">
                        <div class="card">
                            <div class="card-header card-header-text card-header-primary">
                              <div class="card-text">
                                <h4 class="card-title">Edit the Terms</h4>
                              </div>
                            </div>
                            <div class="card-body">
                                <textarea class="textarea " name="content"
                                placeholder="Please Enter for Edit"></textarea>
                            </div>
                        </div>
                    </div>
                  </div>




                    <div class="card-body">
                        <div class="iframe-container d-none d-lg-block">
                            <form>
                                <div style="text-align:center"> To Edit the Terms of the company, please click here :
                                    <br> <button type="button" class="btn btn-primary">Save Change</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
