@extends('layouts.app', ['activePage' => 'account', 'titlePage' => $user->name])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--TITEL SECTION-->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ $user->name }}</h4>
                            <p class="card-category"> Personal Information</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="#" class="btn btn-sm btn-primary">Show The
                                        Cart</a>
                                </div>
                            </div>
                            <!--ADD USERS SECTION-->
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Phone
                                                </th>
                                                <th>
                                                    Birthdate
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    {{ $user->phone }}
                                                </td>
                                                <td>
                                                    {{ $user->birthdate }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Cart SECTION-->
        {{-- <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--TITEL SECTION-->
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">{{ $user->name }}</h4>
                                <p class="card-category"> Carts</p>
                            </div>
                            <div class="card-body">
                                <!--ADD USERS SECTION-->
                                <div class="row">
                                    <div class="table-responsive">
                                        <div class="columns is-multiline"></div>
                                        @foreach ($cart->products as $product)
                                            <div class="column is-4">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <p class="title is-4">
                                                            {{ $product->name }}
                                                        </p>
                                                        <p class="subtitle is-4">
                                                            {{ $product->price }}
                                                        </p>

                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
