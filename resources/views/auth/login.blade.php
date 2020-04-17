@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        <div class="row">
            <div class="col-md-1 sidebarLeft">
            </div>
            <div class="col-md-3">
                <svg height="25%" width="100%" style="margin-top: 10px">
                    <image href="{{url('/images/biashara.svg')}}" height="30%" width="70%"/>
                </svg>
                <div class="loginFromDiv">
                    <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="loginInput @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="loginInput @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="loginButtonDiv">
                    @if (Route::has('password.request'))
                        <a class="btn ForgotPassLink" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    <button type="submit" class="btn loginButtons">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="loginDivider">
                    &nbsp;
                </div>
                <div class="registerDiv">
                    <label style="font-weight: bold; font-size: large">New to Biashara?</label>
                    <button type="submit" class="btn loginButtons">
                        <a class="registerLink" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </button>
                </div>
            </div>
            <div class="col-md-7">
                <svg height="90vh" width="100%" style="margin-top: 10vh;">
                    <image href="{{url('/images/AfricaMap.svg')}}" height="90%" width="90%"/>
                </svg>
            </div>
            <div class="col-md-1 sidebarRight">
            </div>
        </div>
    </form>
</div>
@endsection
