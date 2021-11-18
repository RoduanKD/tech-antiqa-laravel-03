
@extends('layouts.app', ['activePage' => 'privacy', 'titlePage' => 'Privacy Policy'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-danger">
                        <h1 style="text-align:center">Privacy Policy Definition</h1>
                        <h5> Privacy Policy is the document that outlines which information about the users you collect, where this information is stored, and how it will be treated.    </h5>
                    </div>

                    <div class="col-md-14">
                        <div class="card">
                            <div class="card-header card-header-text card-header-danger">
                              <div class="card-text">
                                <h4 class="card-title">Edit the Privacy Policy</h4>
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
                                <div style="text-align:center"> To Edit the Privacy Policy of the company, please click here :
                                    <br> <button type="button" class="btn btn-danger">Save Change</button>
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
