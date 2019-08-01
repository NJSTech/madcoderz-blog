<header>
			<nav class="navbar navbar-dark">
				<div class="container">
					<a class="navbar-brand" href="{{ url('/') }}">
						<h5 class="text-white">Blog</h5>
					</a>
					<ul class="nav">
						<li class="nav-item">
						<a class="nav-link" href="{{ url('/') }}">Home</a>
						</li>
						<!-- Blog -->
						<li class="nav-item">
						<a class="nav-link" href="{{ route('posts.home.index') }}">Blog</a>
						</li>
								{{-- About Us --}}
						<li class="nav-item">
						<a class="nav-link" href="{{ url('about-us') }}">About Us</a>
						</li>	
							{{--Contact us  --}}
						<li class="nav-item">
							<a class="nav-link" href="{{ url('contact-us') }}">Contact Us</a>
						</li>
						@if (Auth::check())
						<li class="dropdown nav-profile hw35 pr-3">
							<a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
								class="nav-link arrow-none">
								@if (Auth::user()->getFirstMediaUrl('profile','thumb'))
									<img alt="madol" src="{{ Auth::user()->getFirstMediaUrl('profile','thumb')}}" class="list-thumbnail rounded-circle" height="50" width="50">
								@else
								<img alt="madol" src="{{ asset('img/default.jpg') }}"class="list-thumbnail rounded-circle" height="50" width="50">
								@endif
							</a>
							<div class="dropdown-menu hw45 dropdown-box-grid">
								<ul class="dropdown-inner p-2">
									<li class="pb-3">
										<div class="dd-userbox d-flex flex-row">
											<div class="dd-info">
												<h5>{{ Auth::user()->name }}</h5>
												<p>{{ Auth::user()->email }}</p>
											</div>
										</div>
									</li>
									<li class="main pb-3">
										<a href="">
											<i class="icon-key mr-2"></i> Change Password</a>
									</li>
									<li class="main pb-3">
										<a href="">
											<i class="icon-user mr-2"></i> Profile</a>
									</li>
									<li class="main pb-3">
										<a href="{{ route('user.logout') }}"><i class="icon-logout mr-2"></i> Log Out</a>
									</li>
								</ul>
							</div>
						</li>
						@else
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}"><i class="icon-login"></i> Login</a>
						</li>		
						<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}"><i class="icon-note"></i> Register</a>
						</li>
						@endif		
					</ul><!-- end nav -->
					<ul class="list-horizontal-unstyled">
						<li><a class="search-toggle" href="#"><i class="icon-magnifier"></i></a></li>
					</ul>
					<!-- Nav Toggle button -->
					<button class="nav-toggle-btn">
			            <span class="lines"></span>
			        </button><!-- toggle button will show when screen resolution is less than 992px -->
				</div><!-- end container -->
			</nav>
		</header>
		<div class="scrolltotop">
			<a class="button-circle button-circle-sm button-circle-dark" href="#"><i class="icon-arrow-up"></i></a>
		</div>
			<!-- end Scroll to top button -->

			<div class="search-wrapper search-style-2">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
						<form method="GET" action="{{ route('posts.search') }}" class="form-style-5">
								<input class="font-large" type="text" placeholder="Search.." name="search" required value="{{ request('search') }}">
								<button type="submit"><i class="icon-magnifier"></i></button>
						</form>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
