@extends('layouts.app', ['activePage' => 'product', 'titlePage' => 'Products'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <!--STATIC SECTION-->
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"> {{ $product->name }} </h4>
                            <p class="card-category">{{ __('Product') }}</p>
                        </div>
                        <div class="card-body ">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!--ACTION SECTION-->
                            <div class="row">
                                <div class="col-12 text-right">
                                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a rel="tooltip" class="btn btn-success btn-round"
                                            href="{{ route('products.edit', $product) }}">
                                            <i class="material-icons">edit</i>
                                            <div class="ripple-container"></div>
                                        </a>
                                        <button rel="tooltip" class="btn btn-danger btn-round" type="submit">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--NAME SECTION-->
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="profile">
                                                <div class="image">
                                                    @if ($product->getMedia('images')->count() > 0)
                                                        <div>
                                                            <img src="{{ $product->getFirstMedia('images')->getUrl() }}"
                                                                alt="{{ $product->name }}" style="max-width:500px;">
                                                        </div>
                                                    @else
                                                        <img class="card-img-top"
                                                            src="https://via.placeholder.com/286x180.png?text=No+Image+Available"
                                                            alt="Card image cap">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-danger">
                                        <h4 class="card-title">Product Information</h4>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>

                                                        <strong> The Seller :</strong> {{ $product->user->name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                        <strong> Name :</strong> {{ $product->name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong> Price :</strong> {{ $product->price }}
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Status :</strong> {{ $product->is_used }}
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong> Quantity :</strong> {{ $product->quantity }}
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong> Category :</strong> {{ $product->category->name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong> Created at :</strong> {{ $product->created_at }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            Discription
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
