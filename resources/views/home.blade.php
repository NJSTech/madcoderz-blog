@extends('layouts.master')

@section('content')
<div class="scrolltotop">
			<a class="button-circle button-circle-sm button-circle-dark" href="#"><i class="icon-arrow-up"></i></a>
		</div>
		<!-- end Scroll to top button -->

		<!-- Fullscreen Search Form -->
		<div class="search-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
						<input type="text" placeholder="Search.." name="search" required>
						<button><i class="icon-search"></i></button>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
		<!-- end Fullscreen Search Form -->

		<!-- Home section -->
		<div class="owl-carousel owl-nav-overlay owl-dots-overlay" data-owl-autoplay="true" data-owl-nav="true" data-owl-dots="true" data-owl-items="1">
			<!-- Slider box 1 -->
			<div class="bg-image" style="background-image: url('/img/product-2.jpg')">
				<div class="section-lg bg-black-06">
					<div class="container text-center">
						<h6 class="heading-uppercase margin-bottom-20">Lifestyle, Travel</h6>
						<h1>Working remotely</h1>
						<a class="button button-lg button-radius button-border-2px button-reveal-right-outline-white margin-top-20" href="#"> <span>Read More</span></a>
					</div>
				</div>
			</div>
			<!-- Slider box 2 -->
			<div class="bg-image" style="background-image: url('/img/product-2.jpg')">
				<div class="section-lg bg-black-06">
					<div class="container text-center">
						<h6 class="heading-uppercase margin-bottom-20">Work, Interview</h6>
						<h1>Working as a Blacksmith</h1>
						<a class="button button-lg button-radius button-border-2px button-reveal-right-outline-white margin-top-20" href="#"> <span>Read More</span></a>
					</div>
				</div>
			</div>
		</div><!-- end owl-carousel -->
		<!-- end Home section -->

		<!-- Category section -->
		<div class="section no-padding-bottom">
			<div class="container">
				<div class="row col-spacing-20">
					@foreach ($categories as $category)
						
					<div class="col-12 col-md-4">
						<div class="hoverbox-8">
						<a href="{{ $category->category_path() }}">
								<img src="{{ $category->getFirstMediaUrl('category','thumb') }}" alt="">
								<div class="content">
								<h6 class="heading-uppercase no-margin">{{ $category->category_name }}</h6>
								</div>
							</a>
						</div>
					</div>
					@endforeach
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
		<!-- end Category section -->

		<div class="section">
			<div class="container">
				<div class="row col-spacing-50">
					<div class="col-12 col-lg-8">
						<!-- Blog Post box 1 -->
						<div class="margin-bottom-50">
							<div class="hoverbox-8">
								<a href="#">
									<img src="/img/product-2.jpg" alt="">
								</a>
							</div>
							<div class="margin-top-30">
								<div class="d-flex justify-content-between margin-bottom-10">
									<div class="d-inline-flex">
										<a class="heading-uppercase" href="#">Lifestyle</a>
									</div>
									<div class="d-inline-flex">
										<span class="font-small">Jan 24, 2019</span>
									</div>
								</div>
								<h5><a href="#">Tips for Street Photography</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
								<div class="margin-top-20">
									<a class="text-btn button-font-2" href="#">Read More</a>
								</div>
							</div>
						</div>
						<!-- Blog Post box 2 -->
						<div class="margin-bottom-50">
							<div class="hoverbox-8">
								<a href="#">
									<img src="/img/product-2.jpg" alt="">
								</a>
							</div>
							<div class="margin-top-30">
								<div class="d-flex justify-content-between margin-bottom-10">
									<div class="d-inline-flex">
										<a class="heading-uppercase" href="#">Knowledge</a>
									</div>
									<div class="d-inline-flex">
										<span class="font-small">Jan 24, 2019</span>
									</div>
								</div>
								<h5><a href="#">10 Books that I will recommend</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
								<div class="margin-top-20">
									<a class="text-btn button-font-2" href="#">Read More</a>
								</div>
							</div>
						</div>
						<!-- Blog Post box 3 -->
						<div class="margin-bottom-50">
							<div class="hoverbox-8">
								<a href="#">
									<img src="/img/product-2.jpg" alt="">
								</a>
							</div>
							<div class="margin-top-30">
								<div class="d-flex justify-content-between margin-bottom-10">
									<div class="d-inline-flex">
										<a class="heading-uppercase" href="#">Health</a>
									</div>
									<div class="d-inline-flex">
										<span class="font-small">Jan 24, 2019</span>
									</div>
								</div>
								<h5><a href="#">Benefits of house plants</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
								<div class="margin-top-20">
									<a class="text-btn button-font-2" href="#">Read More</a>
								</div>
							</div>
						</div>
						<!-- Pagination -->
						<nav>
							<ul class="pagination justify-content-center margin-top-70">
								<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
							</ul>
						</nav>
					</div>
					<!-- end Blog Posts -->
					
					<!-- Blog Sidebar -->
					<div class="col-12 col-lg-4 sidebar-wrapper">
						
						<!-- Sidebar box 1 - Categories -->
						<div class="sidebar-box">
							<h6 class="heading-uppercase">Categories</h6>
							<ul class="list-category">
								<li><a href="#">Art <span>11</span></a></li>
								<li><a href="#">Fashion <span>4</span></a></li>
								<li><a href="#">Lifestyle <span>12</span></a></li>
								<li><a href="#">Nature <span>8</span></a></li>
								<li><a href="#">Travel <span>15</span></a></li>
							</ul>
						</div>
						<!-- Sidebar box 2 - Popular Posts -->
						<div class="sidebar-box">
							<h6 class="heading-uppercase">Popular Posts</h6>
							<!-- Popular post 1 -->
							<div class="popular-post">
								<a href="#"><img src="/img/product-2.jpg" alt=""></a>
								<div>
									<h6 class="font-weight-normal"><a href="#">Street art wall</a></h6>
									<span>Feb 15, 2018</span>
								</div>
							</div>
							<!-- Popular post 2 -->
							<div class="popular-post">
								<a href="#"><img src="/img/product-2.jpg" alt=""></a>
								<div>
									<h6 class="font-weight-normal"><a href="#">Roasted coffee beans</a></h6>
									<span>Feb 15, 2018</span>
								</div>
							</div>
							<!-- Popular post 3 -->
							<div class="popular-post">
								<a href="#"><img src="/img/product-2.jpg" alt=""></a>
								<div>
									<h6 class="font-weight-normal"><a href="#">Artist at work</a></h6>
									<span>Feb 13, 2018</span>
								</div>
							</div>
						</div>
						<!-- Sidebar box 3 - Tags -->
						<div class="sidebar-box">
							<h6 class="heading-uppercase">Tags</h6>
							<ul class="tags">
								<li><a href="#">Art</a></li>
								<li><a href="#">Design</a></li>
								<li><a href="#">Event</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Inspiration</a></li>
								<li><a href="#">Movie</a></li>
								<li><a href="#">Music</a></li>
								<li><a href="#">Nature</a></li>
								<li><a href="#">Office</a></li>
								<li><a href="#">Painting</a></li>
								<li><a href="#">Photography</a></li>
								<li><a href="#">People</a></li>
								<li><a href="#">Work</a></li>
							</ul>
						</div>
						<!-- Sidebar box 4 - Facebook Like box -->
						<div class="sidebar-box text-center">
							<h6 class="heading-uppercase">Follow on</h6>
							<ul class="list-horizontal-unstyled">
								<li><a href="#"><i class="icon-social-facebook"></i></a></li>
								<li><a href="#"><i class="icon-social-twitter"></i></a></li>
								<li><a href="#"><i class="icon-social-youtube"></i></a></li>
							</ul>
						</div>
						<!-- Sidebar box 5 - Subscribe -->
						<div class="sidebar-box">
							<h6 class="heading-uppercase">Subscribe</h6>
							<form>
								<input type="text" placeholder="Email Address.." name="email" required>
								<button class="button button-lg button-grey button-fullwidth">Sign Up</button>
							</form>
						</div>
					</div>
					<!-- end Blog Sidebar -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
@endsection
