@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
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
                                <!-- ANME  -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control @error('name')is-danger @enderror" name="name"
                                                id="input-name" type="text" placeholder="{{ __('Name') }}"
                                                value="{{ old('name', auth()->user()->name) }}" required="true"
                                                aria-required="true" />
                                            @error('name')
                                                <div class="help is-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- EMAIL  -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control @error('email')is-danger @enderror" name="email"
                                                id="input-email" type="email" placeholder="{{ __('Email') }}"
                                                value="{{ old('email', auth()->user()->email) }}" required />
                                            @error('email')
                                                <div class="help is-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- PHONE  -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control @error('phone')is-danger @enderror" name="phone"
                                                value="{{ old('email', auth()->user()->phone) }}" id="input-phone"
                                                type="numbric" placeholder="{{ __('phone') }}" required />
                                            @error('phone')
                                                <div class="help is-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- BIRTHDATE  -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Birthdate') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control @error('birthdate')is-danger @enderror"
                                                name="birthdate" value="{{ old('email', auth()->user()->birthdate) }}"
                                                id="input-birthdate" type="date" placeholder="{{ __('birthdate') }}"
                                                required />
                                            @error('birthdate')
                                                <div class="help is-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Change password') }}</h4>
                                <p class="card-category">{{ __('Password') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status_password'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status_password') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"
                                        for="input-current-password">{{ __('Current Password') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control @error('old_password')is-danger @enderror" input
                                                type="password" name="old_password" id="input-current-password"
                                                placeholder="{{ __('Current Password') }}" value="" required />
                                            @error('old_password')
                                                <div class="help is-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"
                                        for="input-password">{{ __('New Password') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group @error('password')is-danger @enderror">
                                            <input class="form-control @error('password')is-danger @enderror"
                                                name="password" id="input-password" type="password"
                                                placeholder="{{ __('New Password') }}" value="" required />
                                            @if ($errors->has('password'))
                                                <span id="password-error" class="error text-danger"
                                                    for="input-password">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"
                                        for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="password_confirmation"
                                                id="input-password-confirmation" type="password"
                                                placeholder="{{ __('Confirm New Password') }}" value="" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
