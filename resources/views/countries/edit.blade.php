@extends('layouts.app', ['activePage' => 'countries', 'titlePage' => 'Place'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title ">Place</h4>
                            <p class="card-category"> You Can Change the all places from here</p>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Country
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Syria</a>
                            </div>
                        </div>
                       <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                City
                               </button>
                               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="#">Damascus</a>
                                 <a class="dropdown-item" href="#">Aleppo</a>
                                 <a class="dropdown-item" href="#">Hama</a>
                               </div>
                       </div>
                       <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Area
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                             <a class="dropdown-item" href="#">Douma</a>
                             <a class="dropdown-item" href="#">Al-Tal</a>

                           </div>
                   </div>



                    </div>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button type="button-align:center" class="btn btn-success">Change</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>

            </div>
        </div>
    </div>

 @endsection
