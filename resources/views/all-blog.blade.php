@extends('layouts.master')

@section('content')
<!-- Page header -->
<div class="section-sm bg-grey">
    <div class="container text-center">
    <h3 class="font-family-secondary">@if(Request::segment(1)=='categories'){{ $category->category_name }} @elseif(Request::segment(1)=='tags'){{ $tag->tag_name }}@elseif(Request::segment(1)=='posts'){{ $posts->count().' '. 'Search Result' }}@endif</h3>
    </div><!-- end container -->
</div>
<!-- Blog section  -->
<div class="section">
        <div class="container">
            <div class="row col-spacing-50">
                <!-- Blog Posts -->
                <div class="col-12 col-lg-8">
                    <!-- Blog Post box 1 -->
                    @forelse($posts as $post)
						<div class="margin-bottom-50">
							<div class="hoverbox-8">
								<a href="{{ $post->path() }}">
								<img src="{{ $post->getFirstMediaUrl('post') }}" alt="{{ $post->category->category_name }}">
								</a>
							</div>
							<div class="margin-top-30">
								<div class="d-flex justify-content-between margin-bottom-10">
									<div class="d-inline-flex">
                                        <ul class="list-horizontal">
                                            @foreach($post->tags as $tag)
                                                <li><a class="hyperlink-1" href="{{ $tag->tag_path() }}">{{ $tag->tag_name }}</a></li>
                                            @endforeach
                                        </ul>
									</div>
									<div class="d-inline-flex">
										<span class="font-small">{{ date("M d Y",strtotime($post->created_at)) }}</span>
									</div>
								</div>
								<h5><a href="{{ $post->path() }}">{{ $post->title }}</a></h5>
								<div>{!! substr($post->body,0,350) !!}</div>
								<div class="margin-top-20">
									<a class="text-btn button-font-2" href="{{ $post->path() }}">Read More</a>
								</div>
							</div>
                        </div>
                        <i class="icon-like"></i>
                        @empty
                            <h6>No Posts Available</h6>
						@endforelse
                    <!-- Pagination -->
                    {{ $posts->links() }}
                </div>
                <!-- end Blog Posts -->

                <!-- Blog Sidebar -->
                <div class="col-12 col-lg-4 sidebar-wrapper">
                    <!-- Sidebar box 1 - Categories -->
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
                    <div class="margin-bottom-20">
                        <a href="#">
                            <img src="../../assets/images/blog-banner.jpg" alt="">
                        </a>
                    </div>
                    <!-- Sidebar box 5 - Tags -->
                    <div class="sidebar-box">
                        <h6 class="heading-uppercase">Tags</h6>
                        <ul class="tags">
                            @foreach($tags as $tag)
                                <li><a href="{{ $tag->tag_path() }}">{{ $tag->tag_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Sidebar box 6 - Facebook Like box -->
                    <div class="sidebar-box text-center">
                        <h6 class="heading-uppercase">Follow on</h6>
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
    <!-- end Blog section -->
    @endsection