@extends('layouts.master')

@section('content')
<!-- Page header -->
<div class="section-xl bg-image parallax" style="background-image: url({{ asset('img/banner.jpg') }})">
    <div class="bg-black-06">
        <div class="container text-center">
            <h1 class="font-weight-light text-white">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb breadcrumb-font-3">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ul>
            </nav>
        </div><!-- end container -->
    </div>
</div>
<!-- Contact Info section -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 icon-3xl">
                <i class="icon-envelope-open text-dark margin-bottom-20"></i>
                <h6 class="heading-uppercase no-margin">Email</h6>
                <p>madcoderz.01@gmail.com</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 icon-3xl">
                <i class="icon-social-twitter  text-dark margin-bottom-20"></i>
                <h6 class="heading-uppercase no-margin">Follow Us</h6>
                <p><a target="_blank" href="https://twitter.com/CoderzMad">Twitter</a></p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 icon-3xl">
                <i class="icon-social-facebook text-dark margin-bottom-20"></i>
                <h6 class="heading-uppercase no-margin">Follow Us</h6>
                <p><a target="_blank" href="https://www.facebook.com/madcoderz">Facebook</a></p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 icon-3xl">
                <i class="icon-directions text-dark margin-bottom-20"></i>
                <h6 class="heading-uppercase no-margin">Address</h6>
                <p>321/1 8/a Dhanmondi 15,Dhaka</p>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- end Contact Info section -->
    @endsection