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
            <p class="text-center text-muted mb-3">Create an account</p>
        <form method="POST" action="{{ route('register') }}">
                @csrf
                        <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group mt-20 mb-3 row">
                            <div class="col-12 text-right">
                                <input type="submit" class="btn btn-custom btn-fullwidth" data-id="dashboard" value="Submit">
                            </div>
                        </div>
            </form>
            <div class="form-group mb-0 mt-2">
                <div class="col-12 text-center text-muted text-signup">
                Already have an account? <a href="{{ route('login') }}" class="text-info ml-2"><b>Sign In</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
