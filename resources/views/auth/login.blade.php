@extends('layouts._login')

@section('content')
    <div class="m-login__container">
        <div class="m-login__logo">
            <a href="#">
                <img src="{{ asset('theme/assets/app/media/img/logos/logo-1.png') }}">
            </a>
        </div>
        <div class="m-login__signin">
            <div class="m-login__head">
                <h3 class="m-login__title">{{ __('Login') }}</h3>
            </div>
            <form method="POST" class="m-login__form m-form" action="{{ route('login') }}">
                @csrf
                <div class="form-group m-form__group">
                    <input value="{{ old('email') }}" class="form-control m-input" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" required autocomplete="off">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group m-form__group">
                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="{{ __('Password') }}"
                           name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="row m-login__form-sub">
                    <div class="col m--align-left m-login__form-left">
                        <label class="m-checkbox  m-checkbox--light">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="m-login__form-action">
                    <button type="submit"
                            class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">{{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
