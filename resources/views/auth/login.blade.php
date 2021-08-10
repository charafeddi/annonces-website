@extends('layouts.app')

@section('content')
<div class="auth-page sign-in">
<div class="connect-container align-content-stretch d-flex flex-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="auth-form">
                    <div class="row">
                        <div class="col">
                            <div class="logo-box"><a href="#" class="logo-text">Connect</a></div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group ">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email"  autofocus> @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> @enderror
                                </div>
                                <div class="form-group ">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password"> @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-block btn-submit">{{ __('Sign In') }}</button>
                                <div class="auth-options">
                                    <div class="custom-control custom-checkbox form-group">
                                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="exampleCheck1"> {{ __('Remember Me') }}</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a class="forgot-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                     @endif
                                     <a class="forgot-link" href="{{ route('register') }}">
                                        {{__('create account') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block d-xl-block">
                <div class="auth-image"></div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
