@extends('layouts.app', ['activePage' => 'account', 'titlePage' => 'User'])
@section('content')
    <div class="content">
        <div class="section">
            <div class="container">
                <ul>
                    @foreach ($errors->all() as $error) @endforeach
                </ul>
                <!--USER FORME-->
                <form action="{{ route('users.store') }}" method="POST" autocomplete="off" class="form-horizontal">
                    @csrf
                    <!--STATIC SECTION-->
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"> Create New User</h4>
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
                            <!--NAME SECTION-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Full Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class=" form-control @error('name')is-danger @enderror" name=" name"
                                            id="input-name" type="text" placeholder="{{ __(' Full Name') }}"
                                            aria-required="true" />
                                        @if ($errors->has('name'))
                                            <span id="name-error" class="error text-danger"
                                                for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--PASSWORD SECTION-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Password') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control @error('birthdate')is-danger @enderror" input
                                            type="password" name="password" placeholder="{{ __('Password') }}" value=""
                                            required />
                                        @if ($errors->has('password'))
                                            <span id="name-error" class="error text-danger"
                                                for="input-name">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--EMAIL -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class=" form-control @error('birthdate')is-danger @enderror" name="email"
                                            id="input-email" type="email" placeholder="{{ __('Email') }}" required />
                                        @if ($errors->has('email'))
                                            <span id="email-error" class="error text-danger"
                                                for="input-email">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--ROLE-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Role') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="select is-rounded  @error('role_id')is-danger @enderror">
                                            <select name="role_id">
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
                                        <input class=" form-control @error('birthdate')is-danger @enderror" name="phone"
                                            id="input-phone" type="numbric" placeholder="{{ __('phone') }}" required />
                                        @if ($errors->has('phone'))
                                            <span id="phone-error" class="error text-danger"
                                                for="input-phone">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--BIRTHDATE -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Birthdate') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class=" form-control @error('birthdate')is-danger @enderror" name="birthdate"
                                            id="input-birthdate" type="date" placeholder="{{ __('birthdate') }}"
                                            required />
                                        @error('birthdate')
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
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Cancel') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
