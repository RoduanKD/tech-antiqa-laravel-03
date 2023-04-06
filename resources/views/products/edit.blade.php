@extends('layouts.app', ['activePage' => 'product', 'titlePage' => 'edit product'])
@section('content')
    <div class="content">
        <div class="section">
            <div class="container">
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
                <!--USER FORME-->
                <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off" class="form-horizontal">
                    @method('PUT')
                    @csrf
                    <!--STATIC SECTION-->
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"> Update {{ $product->name }} Product</h4>
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
                            <!--NAME SECTION-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class=" form-control" name=" name"
                                            value="{{ old('name', $product->name) }}" id="input-name" type="text"
                                            placeholder="{{ __('Name') }}" aria-required="true" />
                                        @error('name')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--Price-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class=" form-control" name="price" type="numeric"
                                            value="{{ old('price', $product->price) }}" placeholder="{{ __('100$') }}"
                                            aria-required="true" />
                                        @error('price')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--PHOTO -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Product Iamges') }}</label>
                                <div class="col-sm-7">
                                    <div class="from-group">
                                        <input class="file-input" type="file" name="image">
                                        <span class="file-cta">
                                            <span class="file-icon">
                                                <i class="fas fa-upload"></i>
                                            </span>
                                            <span class="file-label">
                                                {{ __('Choose a file…') }}
                                            </span>
                                        </span>
                                        </label>
                                        @error('image')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--VEDIO -->
                            {{-- <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Product Vedio') }}</label>
                                <div class="col-sm-7">
                                    <div class="from-group">
                                        <input class="file-input" type="file" name="vedio">
                                        <span class="file-cta">
                                            <span class="file-icon">
                                                <i class="fas fa-upload"></i>
                                            </span>
                                            <span class="file-label">
                                                {{ __('Choose a file…') }}
                                            </span>
                                        </span>
                                        </label>
                                        @error('vedio')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div> --}}
                            <!--quantity-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('quantity') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class=" form-control @error('quantity')is-danger @enderror" name="quantity"
                                            value="{{ old('quantity', $product->quantity) }}" type="number"
                                            placeholder="{{ __('4 pices') }}" aria-required="true" />
                                        @error('quantity')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--language-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Language</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="control">
                                            <label class="radio">
                                                <input type="radio" name="language" value="ar"
                                                    {{ $product->language == 'ar' ? 'checked' : '' }}>
                                                Arabic
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="language" value="en"
                                                    {{ $product->language == 'en' ? 'checked' : '' }}>
                                                English
                                            </label>
                                        </div>
                                        @error('language')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--Category-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="select @error('category_id')is-danger @enderror">
                                            <select name="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category_id')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--Specification-->
                            {{-- <div class="row">
                                <label class="col-sm-2 col-form-label">Specification</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="select @error('specification_id')is-danger @enderror">
                                            <select name="specification_id">
                                                @foreach ($categories->specifications as $specification)
                                                    <option value="{{ $specification->id }}"
                                                        {{ $specification->id == old('specification_id') ? 'selected' : '' }}>
                                                        {{ $specification->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('Specification_id')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div> --}}
                            <!--Status-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="control">
                                            <label class="radio">
                                                <input type="radio" name="is_used" value="0"
                                                    {{ $product->is_used == '0' ? 'checked' : '' }}>
                                                New
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="is_used" value="1"
                                                    {{ $product->is_used == '1' ? 'checked' : '' }}>
                                                Used
                                            </label>
                                        </div>
                                        @error('is_used')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--Auction-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Auction</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="control">
                                            <label class="radio">
                                                <input type="radio" name="auction" value="yes"
                                                    {{ $product->auction == 'yes' ? 'checked' : '' }}>
                                                Yes
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="auction" value="no"
                                                    {{ $product->auction == 'no' ? 'checked' : '' }}>
                                                No
                                            </label>
                                        </div>
                                        @error('auction')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--AGREMENT -->
                            <div class="form-check mr-auto ml-3 mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="policy" name="policy"
                                        {{ old('policy', 1) ? 'checked' : '' }}>
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
                                </label>
                            </div>
                        </div>
                        <!--SUBMIT -->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Cancel') }}</button>
                        </div>

                    </div>

            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
