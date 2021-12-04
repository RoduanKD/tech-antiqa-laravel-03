@extends('layouts.app', ['activePage' => 'category', 'titlePage' => 'Category'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--TITEL SECTION-->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Here you can manage Categories</h4>
                            <p class="card-category"> You have {{ $categories->count() }} categories</p>
                        </div>
                        <div class="card-body">
                            {{-- ADD CATEGORY --}}
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary">Add
                                        category</a>
                                </div>
                            </div>
                            <!--STATIC INFO-->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Category Name
                                            </th>
                                            <th>
                                                Count Of Product
                                            </th>
                                            <th>
                                                Creation date
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <!--DYNAMIC INFO-->
                                    @foreach ($categories as $category)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="{{ route('categories.show', $category) }}">
                                                        {{ $category->name }} </a>
                                                </td>
                                                <td>
                                                    {{-- TODO: count of products --}}
                                                    {{ $category->count() }}
                                                </td>
                                                <td>
                                                    {{ $category->created_at }}
                                                </td>
                                                <!-- EDIT -->
                                                <td class="td-actions text-right">
                                                    <form action="{{ route('categories.destroy', $category) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <a rel="tooltip" class="btn btn-success btn-link"
                                                            href="{{ route('categories.edit', $category) }}"
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
