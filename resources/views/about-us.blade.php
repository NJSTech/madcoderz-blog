@extends('layouts.master')

@section('content')
<!-- Page header -->
<div class="section-xl bg-image parallax" style="background-image: url({{ asset('img/banner.jpg') }})">
    <div class="bg-black-06">
        <div class="container text-center">
            <h1 class="font-weight-light text-white">About Us</h1>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb breadcrumb-font-3">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ul>
            </nav>
        </div><!-- end container -->
    </div>
</div>
    <!-- About section -->
		<div class="section">
			<div class="container">
				<div class="row align-items-center col-spacing-50">
					<div class="col-12 col-lg-12">
						<h3 class="font-weight-light">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book..</p>
						<a class="button button-lg button-rounded button-reveal-right-dark margin-top-30" href="#"><span>Get In Touch</span><i class="ti-arrow-right"></i></a>
					</div>
					
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
    @endsection