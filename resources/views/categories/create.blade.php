@extends('layouts.app', ['activePage' => 'category', 'titlePage' => 'category'])
@section('content')
    <div class="content">
        <div class="section">
            <div class="container">
                <!--USER FORME-->
                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off"
                    class="form-horizontal">
                    @csrf
                    <!--STATIC -->
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"> Create New Category</h4>
                            <p class="card-category">{{ __('Category') }}</p>
                        </div>
                        <div class="card-body ">
                            <!-- STATUS -->
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
                            <!--NAME -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Category Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class=" form-control @error('name')is-danger @enderror" name=" name"
                                            id="input-name" type="text" placeholder="{{ __('Name') }}"
                                            aria-required="true" />
                                        @error('name')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--PHOTO -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Category Iamge') }}</label>
                                <div class="col-sm-7">
                                    <div class="from-group">
                                        <input class="file-input" type="file" name="image">
                                        @error('image')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--SUBMIT-->
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Cancel') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
