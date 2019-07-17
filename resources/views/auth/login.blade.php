@extends('layouts.app')

@section('content')
<div class="section-fullscreen bg-image" style="background-image: url('/img/background.jpg')">
			<div class="bg-black-04">
				<div class="container text-center">
					<div class="position-middle">
						<div class="row">
							<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
								<h4 class="font-weight-light text-white margin-bottom-30">Enter your login</h4>
								<form method="POST" action="{{ route('login') }}">
                                    @csrf
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="custom-control custom-checkbox float-left mb-1">
                                        <input type="checkbox" class="custom-control-input form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label form-check-label text-white" for="remember">Remember Me!</label>
                                    </div>
									<button type="submit" name="submit" class="button button-lg button-outline-white-2 button-fullwidth">Login</button>
								</form>
								<div class="margin-top-30">
									<ul class="list-unstyled">
										<li>@if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-forgot"><i class="icon-lock"></i> Forgot password?</a>
                                        @endif
                                        </li>
										<li class="text-white">Don't have an account? <a href="{{ route('register') }}" class="text-info ml-2"><b>Sign Up</b></a></li>
									</ul>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end position-middle -->
				</div><!-- end container -->
			</div>
		</div>
@endsection
