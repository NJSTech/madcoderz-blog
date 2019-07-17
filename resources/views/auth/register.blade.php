@extends('layouts.app')

@section('content')
<div class="section-fullscreen bg-image" style="background-image: url('/img/background.jpg')">
			<div class="bg-black-04">
				<div class="container text-center">
					<div class="position-middle">
						<div class="row">
							<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
								<h4 class="font-weight-light margin-bottom-30 text-white">Registration</h4>
								 <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group mt-20 mb-3 row">
                                        <div class="col-12 text-right">
                                            <button type="submit" name="submit" class="button button-lg button-outline-white-2 button-fullwidth">Register</button>
                                        </div>
                                    </div>
                                </form>
								<div class="margin-top-30">
                                    <p class="text-white">Already have an account? <a href="{{ route('login') }}" class="text-info ml-2"><b>Sign In</b></a></p>
									<p class="text-white">By signing up, you agree to our <a href="javascript:void(0)">Terms of Use</a></p>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end position-middle -->
				</div><!-- end container -->
			</div>
		</div>
@endsection
