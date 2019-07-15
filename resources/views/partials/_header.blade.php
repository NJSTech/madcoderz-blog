<header>
			<nav class="navbar navbar-dark">
				<div class="container">
					<a class="navbar-brand" href="{{ url('/') }}">
						<h5>Blog</h5>
					</a>
					<ul class="nav">
						<li class="nav-item">
						<a class="nav-link" href="{{ url('/') }}">Home</a>
						</li>
						<!-- dropdown link 2 -->
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>		
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>		
						<li class="nav-item">
							<a class="nav-link" href="#">Contact Us</a>
						</li>		
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}"><i class="icon-login"></i> Login</a>
						</li>		
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-note"></i> Register</a>
						</li>		
					</ul><!-- end nav -->
					<!-- Nav Toggle button -->
					<button class="nav-toggle-btn">
			            <span class="lines"></span>
			        </button><!-- toggle button will show when screen resolution is less than 992px -->
				</div><!-- end container -->
			</nav>
		</header>
