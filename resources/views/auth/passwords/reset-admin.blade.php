@extends('layouts.app')

@section('content')
<div class="section-lg bg-image" style="height:665px;background-image: url('/img/background.jpg')">
			<div class="container text-center">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
						<h4 class="font-weight-light margin-bottom-30 text-white">Recover your Account</h4>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                 {{ session('status') }}
                            </div>
                        @endif
						<form method="POST" action="{{ route('admin.password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							<button type="submit" name="submit" class="button button-lg button-border-1px button-fullwidth">Recover Account</button>
						</form>
						<div class="margin-top-30">
							<a href="{{ route('login') }}">Go back to login</a>
						</div>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
@endsection
