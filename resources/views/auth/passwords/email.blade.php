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
            <p class="text-center text-muted mb-3">Reset Password</p>
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group my-3 row">
                    <div class="col-12 text-right">
                        <input type="submit" class="btn btn-custom btn-fullwidth" data-id="dashboard" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
