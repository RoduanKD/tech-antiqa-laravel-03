@extends('layouts.app', ['activePage' => 'product', 'titlePage' => 'Products'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        @if (Session::get('error'))
                            <li>{{ Session::get('error') }}</li>
                        @endif
                    </ul>
                    <!--TITEL SECTION-->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Here you can manage Products</h4>
                            <p class="card-category"> You have {{ $products->count() }} Products</p>
                        </div>
                        <div class="card-body">
                            <!--ADD PRODUCTS SECTION-->
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Add
                                        product</a>
                                </div>
                            </div>
                            <!--STATIC INFO-->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Image
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                Category
                                            </th>
                                            <th>
                                                Time
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <!--DYNAMIC INFO-->
                                    @foreach ($products as $product)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    @if ($product->getFirstMedia('images'))
                                                        <img src="{{ $product->getFirstMediaUrl('images', 'thumb') }}"
                                                            alt="{{ $product->name }}" class="card-img-top">
                                                    @else
                                                        <img class="card-img-top"
                                                            src="https://via.placeholder.com/286x180.png?text=No+Image+Available"
                                                            alt="Card image cap">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('products.show', $product) }}">
                                                        {{ $product->name }} </a>
                                                </td>
                                                <td>
                                                    {{ $product->price }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('categories.show', $product->category) }}"
                                                        class="btn btn-primary">
                                                        {{ $product->category->name }}</a>
                                                </td>
                                                <td>
                                                    <time>{{ $product->created_at->format('d M y') }}</time>
                                                </td>
                                                <!-- EDIT -->
                                                <td class="td-actions text-right">
                                                    <form action="{{ route('products.destroy', $product) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <a rel="tooltip" class="btn btn-success btn-link"
                                                            href="{{ route('products.edit', $product) }}"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                        <button rel="tooltip" class="btn btn-danger btn-round"
                                                            type="submit">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    </form>
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
