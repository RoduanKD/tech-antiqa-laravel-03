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
                        <div class="card is-multiline">
                            @foreach ($cart->products as $product)

                                <div class="card is-4">
                                    <div class="card">

                                        <div class="card-image">
                                            <figure class="image is-4by3">
                                                <img src="https://bulma.io/images/placeholders/1280x960.png"
                                                    alt="Placeholder image">
                                            </figure>
                                        </div>
                                        <div class="card-content">
                                            <div class="media">
                                                <div class="media-left">
                                                    <figure class="image is-48x48">
                                                        <img src="https://bulma.io/images/placeholders/96x96.png"
                                                            alt="Placeholder image">
                                                    </figure>
                                                </div>
                                                <div class="media-content">
                                                    <p class="title is-4">{{ $product->name }}</p>
                                                    <p class="subtitle is-6">
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="content">
                                                <a href="#">#css</a> <a href="#">#responsive</a>
                                                <br>
                                                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
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

@endsection
