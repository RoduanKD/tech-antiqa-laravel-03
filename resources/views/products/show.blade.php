@extends('layouts.app', ['activePage' => 'product', 'titlePage' => 'Products'])
{{-- TODO: update the show of category --}}
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-danger">
                        <h1 style="text-align:center">Products</h1>
                        <h3 style="text-align:center">Transport company data</h3>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="container">
                                    <div class="block">
                                        @if ($product->getMedia('images')->count() > 0)
                                            <div>
                                                <img src="{{ $product->getFirstMedia('images')->getUrl() }}" alt=""
                                                    style="max-width:500px;">
                                            </div>
                                        @endif
                                        {{-- <div class="image">
                                            <img src=" {{ $product->getFirstMedia('media') }}" alt="{{ $product->titel }}">
                                        </div> --}}
                                    </div>
                                    <div class="block">
                                        <div class="content is-medium">
                                            <p> {!! $product->price !!} </p>
                                        </div>
                                    </div>

                                    <div class="field is-grouped">
                                        <p class="control">
                                            <a class=" button is-success is-outlined"
                                                href="{{ route('products.edit', $product) }}">
                                                <span class="icon-text">
                                                    <span class="icon">
                                                        <i class="fas fa-home"></i>
                                                    </span>
                                                    <span>Ediat product</span>
                                                </span>
                                            </a>
                                        </p>
                                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <p class="control">
                                                <button class="button is-danger is-outlined" type="submit">
                                                    <span class="icon is-small">
                                                        <i class="fas fa-times"></i>
                                                    </span>
                                                    <span>Delete product</span>
                                                </button>
                                        </form>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
