@extends('layouts.app', ['activePage' => 'cart', 'titlePage' => 'Carts'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--TITEL SECTION-->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Carts</h4>
                            <p class="card-category"> Here you can show Carts</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Photo
                                            </th>
                                            <th>
                                                Name Of Product
                                            </th>
                                            <th>
                                                Name Of Owner
                                            </th>
                                            <th>
                                                Category
                                            </th>
                                            <th class="text-right">
                                                Price
                                            </th>
                                        </tr>
                                    </thead>
                                    <!--DYNAMIC INFO-->
                                    @foreach ($products as $product)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{ $product->user_id->name }}
                                                </td>
                                                <td>
                                                    {{ $product->name }}
                                                </td>
                                                <td>
                                                    {{ $product->category_id->name }}
                                                </td>
                                                <td>
                                                    {{ $product->price }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
