@extends('layouts.app')

@section('content')
<div class="login-form">
    <div class="card ">
        <div class="card-body">
            <div class="main-logo text-center my-3">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
            </div>
            <p class="text-center text-muted mb-3">Sign in to your account</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row form-group mt-3">
                    <div class="col-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label form-check-label" for="remember">Remember Me!</label>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-forgot"><i class="icon-lock"></i> Forgot password?</a>
                        @endif
                    </div>
                </div>
                <div class="form-group my-3 row">
                    <div class="col-12 text-right">
                        <input type="submit" class="btn btn-custom btn-fullwidth" data-id="dashboard" value="Submit">
                    </div>
                </div>
            </form>
            <div class="form-group mb-0 mt-2">
                <div class="col-12 text-center text-muted text-signup">
                Don't have an account? <a href="{{ route('register') }}" class="text-info ml-2"><b>Sign Up</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
