@extends('layouts.app', ['activePage' => 'delivery-company', 'titlePage' => 'delivery company'])
@section('content')
    <div class="content">
        <div class="section">
            <div class="container">
                <ul>
                    @foreach ($errors->all() as $error) @endforeach
                </ul>
                <!--STATIC SECTION-->
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h3 class="card-title"> Add Information Company</h3>
                        <p class="card-category">{{ __('Delivery Company') }}</p>
                    </div>
                    <div class="card-body ">
                        @if (session('status'))
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <span>{{ session('status') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <form action="{{ route('deliveries.store') }}" method="POST" autocomplete="off"
                            class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text @error('name')is-danger @enderror" class="form-control" name="name"
                                    aria-describedby="RegionsHelp" placeholder="Company name..">
                                @error('name')
                                    <div class="help is-danger">{{ $message }}</div>
                                @enderror
                                <small id="RegionsHelp" class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Email </label>
                                <input type="email @error('email')is-danger @enderror" class="form-control" name="email"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                @error('email')
                                    <div class="help is-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">contact number</label>
                                <input type="phone @error('phon_number')is-danger @enderror" class="form-control"
                                    name="phon_number" aria-describedby="contact number" placeholder="Enter contact number">
                                @error('phon_number')
                                    <div class="help is-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text  @error('address')is-danger @enderror" class="form-control"
                                    name="address" aria-describedby="RegionsHelp" placeholder="Company Address..">
                                @error('address')
                                    <div class="help is-danger">{{ $message }}</div>
                                @enderror
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
