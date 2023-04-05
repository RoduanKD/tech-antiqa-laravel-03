@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => 'User Mangement'])


@section('content')
    <div class="content">
        <div class="section">
            <div class="container">
                <ul>
                    @if (Session::get('error'))
                        <li>{{ Session::get('error') }}</li>
                    @endif
                </ul>
                <ul>
                    @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                </ul>
                <!--USER FORME-->
                <form action="{{ route('users.update', $user) }}" method="POST" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <!--STATIC -->
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"> Edit User Information</h4>
                            <p class="card-category">{{ __('User information') }}</p>
                        </div>
                        <div class="card-body ">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!--NAME -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Full Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control  @error('name')is-danger @enderror" name="name"
                                            value="{{ old('name', $user->name) }}" id="input-name" type="text"
                                            placeholder="{{ __(' Full Name') }}" aria-required="true" />
                                        @error('name')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--EMAIL -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('email')is-danger @enderror" name="email"
                                            value="{{ old('email', $user->email) }}" id="input-email" type="email"
                                            placeholder="{{ __('Email') }}" required />
                                        @error('email')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--ROLE-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Role') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="select is-rounded  @error('role_id')is-danger @enderror">
                                            <select name="role_id" value="{{ old('role_id') }}">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            <div>
                                                @error('role_id')
                                                    <div class="help is-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--PHONE -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('phone')is-danger @enderror" name="phone"
                                            value="{{ old('phone', $user->phone) }}" id="input-phone" type="numbric"
                                            placeholder="{{ __('phone') }}" required />
                                        @error('phone')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--BIRTHDATE -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Birthdate') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('birthdate')is-danger @enderror" name="birthdate"
                                            value="{{ old('birthdate', $user->birthdate) }}" id="input-birthdate"
                                            type="date" placeholder="{{ __('birthdate') }}" required />
                                        @error('birthdate')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--AGREEMENT -->
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
                            <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Cancel') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
