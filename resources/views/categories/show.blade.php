@extends('layouts.app', ['activePage' => 'category', 'titlePage' => $category->name])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--TITEL SECTION-->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ $category->name }}</h4>
                        </div>
                        <div class="card-body">
                            <!--categories' Product-->
                            <div class="row">
                                <div class="columns is-multiline">

                                    @foreach ($category->products as $product)
                                        {{-- TODO: make it good view :) --}}
                                        <div class="card-content">
                                            <div class="media-content">
                                                <p class="title is-4"> "{{ $product->name }}" </p>
                                                <p class="title is-4"> "{{ $product->user->name }}" </p>
                                                <p class="subtitle is-6"> "{{ $product->price }}"</p>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <br>
                                            <time datetime="2016-1-1">{{ $product->created_at }}</time>
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
