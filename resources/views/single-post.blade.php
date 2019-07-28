@extends('layouts.master')

@section('content')
<!-- Page header -->
<div class="section-xl bg-image parallax" style="background-image: url({{ $post->getFirstMediaUrl('post','banner') }})">
    <div class="bg-black-06">
        <div class="container text-center">
            <h1 class="font-weight-light text-white">{{ $post->title }}</h1>
            <ul class="list-horizontal-dash">
            <li><a href="#">{{ date('M d Y',strtotime($post->created_at)) }}</a></li><li><a href="#">{{ $post->category->category_name }}</a></li><li><a href="#">By {{ $post->author->name }}</a></li>
            </ul>
        </div><!-- end container -->
    </div>
</div>
    <!-- Blog Post section -->
    <div class="section">
        <div class="container">
            <div class="row col-spacing-50">
                <!-- Post Content -->
                <div class="col-12 col-lg-8">
                    <div class="margin-bottom-30">
                            <h1 class="font-weight-light">{{ $post->title }}</h1>
                    </div>
                    
                    <div>{!! $post->body !!}</div>
                    <!-- Post Tags / Share -->
                    <div class="row margin-top-50">
                        <div class="col-6">
                            <h6 class="heading-uppercase">Tags</h6>
                            <ul class="list-horizontal">
                                @foreach($post->tags as $tag)
                            <li><a class="hyperlink-1" href="#">{{ $tag->tag_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-6 text-right">
                            <h6 class="heading-uppercase">Share On</h6>
                            <ul class="list-horizontal-unstyled">
                                <li><a href="#"><i class="icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end Post Tags / Share -->

                    <!-- Comments -->
                    <div class="border-top margin-top-60">
                        <h5 class="margin-top-50 margin-bottom-30">Comments</h5>
                        <!-- Comment box 1 -->
                        <div class="comment-box">
                            <div class="comment-user-avatar">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="comment-content">
                                <span class="comment-time">2 hours ago</span>
                                <h6 class="no-margin font-weight-normal">John Smith</h6>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                            </div>
                        </div>
                        <!-- Comment box 2 -->
                        <div class="comment-box">
                            <div class="comment-user-avatar">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="comment-content">
                                <span class="comment-time">5 hours ago</span>
                                <h6 class="no-margin font-weight-normal">Alexander Warren</h6>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                            </div>
                        </div>
                        <!-- Comment box 3 -->
                        <div class="comment-box">
                            <div class="comment-user-avatar">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="comment-content">
                                <span class="comment-time">1 day ago</span>
                                <h6 class="no-margin font-weight-normal">Melissa Bakos</h6>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Write a Comment -->
                    <div class="border-top margin-top-60">
                        <h5 class="margin-top-50 margin-bottom-30">Write a Comment</h5>
                        <form>
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="email" name="email" placeholder="E-Mail" required>
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="button button-lg button-grey" type="submit">Post Comment</button>
                        </form>
                    </div>
                </div>
                <!-- end Post Content -->

                <!-- Blog Sidebar -->
                <div class="col-12 col-lg-4 sidebar-wrapper">
                    <!-- Sidebar box 1 - About me -->
                    <div class="sidebar-box text-center">
                        <h6 class="heading-uppercase">About Me</h6>
                    <img class="img-circle-md margin-bottom-20" src="{{ $post->author->getFirstMediaUrl('profile','thumb') }}" alt="">
                        <p>{{ $post->author->profile->about }}.</p>
                        <ul class="list-horizontal-unstyled margin-top-20">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Sidebar box 2 - Categories -->
                    <div class="sidebar-box">
                        <h6 class="heading-uppercase">Categories</h6>
                        <ul class="list-category">
                            @foreach ($categories as $category)
                                <li><a href="{{ $category->category_path() }}">{{ $category->category_name }} <span>{{ $category->posts()->count() }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Sidebar box 3 - Popular Posts -->
                    <div class="sidebar-box">
                        <h6 class="heading-uppercase">Popular Posts</h6>
                        <!-- Popular post 1 -->
                        <div class="popular-post">
                            <a href="/Blog/Single/Image-Post.html">
                                <img src="../../assets/images/popular-post-1.jpg" alt="">
                            </a>
                            <div>
                                <h6 class="font-weight-normal"><a href="/Blog/Single/Image-Post.html">Street art wall</a></h6>
                                <span>Feb 15, 2018</span>
                            </div>
                        </div>
                        <!-- Popular post 2 -->
                        <div class="popular-post">
                            <a href="/Blog/Single/Image-Post.html">
                                <img src="../../assets/images/popular-post-2.jpg" alt="">
                            </a>
                            <div>
                                <h6 class="font-weight-normal"><a href="/Blog/Single/Image-Post.html">Roasted coffee beans</a></h6>
                                <span>Feb 15, 2018</span>
                            </div>
                        </div>
                        <!-- Popular post 3 -->
                        <div class="popular-post">
                            <a href="/Blog/Single/Image-Post.html">
                                <img src="../../assets/images/popular-post-3.jpg" alt="">
                            </a>
                            <div>
                                <h6 class="font-weight-normal"><a href="/Blog/Single/Image-Post.html">Artist at work</a></h6>
                                <span>Feb 13, 2018</span>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar box 4 - Banner Image -->
                    <div class="margin-bottom-30">
                        <a href="#">
                            <img src="../../assets/images/blog-banner.jpg" alt="">
                        </a>
                    </div>
                    <!-- Sidebar box 5 - Tags -->
                    <div class="sidebar-box">
                        <h6 class="heading-uppercase">Tags</h6>
                        <ul class="tags">
                            @foreach($tags as $tag)
                                <li><a href="#">{{ $tag->tag_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Sidebar box 6 - Facebook Like box -->
                    <div class="sidebar-box text-center">
                        <h6 class="heading-uppercase">Follow On</h6>
                        <ul class="list-horizontal-unstyled">
								<li><a href="https://www.facebook.com/madcoderz" target="_blank"><i class="icon-social-facebook"></i></a></li>
								<li><a href="https://twitter.com/CoderzMad" target="_blank"><i class="icon-social-twitter"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCeRKu1G7QaViw5-oxv7iFTw" target="_blank"><i class="icon-social-youtube"></i></a></li>
							</ul>
                    </div>
                    <!-- Sidebar box 7 - Subscribe -->
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
    <!-- end Blog Post section -->
    @endsection