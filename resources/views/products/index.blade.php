@extends('layouts.app', ['activePage' => 'product', 'titlePage' => 'Products'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-danger">
                        <h1 style="text-align:center">Products</h1>
                        <h3 style="text-align:center"> {{ $products->count() }} Product</h3>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container">
                                <ul>
                                    @if (Session::get('error'))
                                        <li>{{ Session::get('error') }}</li>
                                    @endif
                                </ul>
                                <div class="columns is-multiline">
                                    @foreach ($products as $product)
                                        <div class="column is-4">
                                            <div class="card">
                                                <div class="card-image">
                                                    <figure class="image is-4by3">
                                                        {{ $product->media->photo }}
                                                    </figure>
                                                </div>
                                                <div class="card-content">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <figure class="image is-48x48">

                                                            </figure>
                                                        </div>
                                                        <div class="media-content">
                                                            <p class="title is-4"> <a
                                                                    href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                                                            </p>
                                                            <p class="subtitle is-6"> {{ $product->price }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <br>
                                                        <time datetime="2016-1-1">{{ $product->created_at }}</time>
                                                        <br>
                                                        <a href="{{ route('categories.show', $product->category) }}"
                                                            class="tag is-danger">{{ $product->category->name }}</a>
                                                    </div>
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
    </div>
@endsection
