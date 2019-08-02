@extends('layouts.master')

@section('content')
<!-- Page header -->
<div class="section-xl bg-image parallax" style="background-image: url({{ $post->getFirstMediaUrl('post','banner') }})">
    <div class="bg-black-06">
        <div class="container text-center">
            <h1 class="font-weight-light text-white">{{ $post->title }}</h1>
            <ul class="list-horizontal-dash">
            <li class="text-white">{{ date('M d Y',strtotime($post->created_at)) }}</li><li><a href="{{ $post->category->category_path() }}">{{ $post->category->category_name }}</a></li><li class="text-white">By {{ $post->author->name }}</li>
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
                                    <li><a class="hyperlink-1" href="{{ $tag->tag_path() }}">{{ $tag->tag_name }}</a></li>
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
                     <!-- Write a Comment -->
                     <div class="border-top margin-top-60">
                        <h5 class="margin-top-50 margin-bottom-30">Write a Comment</h5>
                        <form method="POST" action="{{ route('comment.store') }}" enctype="multipart/form-data" accept="UTF-8">
                            @csrf
                            <textarea name="comment" placeholder="Message">{{ old('comment') }}</textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button class="button button-lg button-grey float-right" type="submit">Post Comment</button>
                        </form>
                    </div>
                    <!-- Comments -->
                    <div class="border-top margin-top-60">
                        <h5 class="margin-top-50 margin-bottom-30">Comments</h5>
                        <!-- Comment box 1 -->
                        @foreach ($post->comments as $comment)
                        <div class="comment-box">
                            <div class="comment-user-avatar">
                                    @if ($comment->commentable->getFirstMediaUrl('profile','thumb'))
										<img alt="madol" src="{{ $comment->commentable->getFirstMediaUrl('profile','thumb')}}" class="list-thumbnail rounded-circle" height="50" width="50">
									@else
									<img alt="madol" src="{{ asset('img/default.jpg') }}"class="list-thumbnail rounded-circle" height="50" width="50">
									@endif
                            </div>
                            <div class="comment-content">
                            <span class="comment-time">{{ $comment->created_at->diffForHumans() }}</span>
                                <h6 class="no-margin font-weight-normal">{{ $comment->commentable->name }}</h6>
                            <p>{{ $comment->comment }}</p>
                            <a href="#" class="text-14 bold mb-10 show-reply-input">Reply</a>
                            {{-- write a reply --}}
                            <div class="comment-box of-reply">
                                <div class="comment-user-avatar">
                                    @if ($comment->commentable->getFirstMediaUrl('profile','thumb'))
										<img alt="madol" src="{{ $comment->commentable->getFirstMediaUrl('profile','thumb')}}" class="list-thumbnail rounded-circle" height="50" width="50">
									@else
									<img alt="madol" src="{{ asset('img/default.jpg') }}"class="list-thumbnail rounded-circle" height="50" width="50">
									@endif
                                </div>
                                <form action="{{route('comment.reply.store')}}" method="POST">
                                    @csrf
                                    <textarea name="reply" class="reply-input adjust-reply reply" rows="1" cols="3" placeholder="Add a Reply"></textarea>
                                    <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                    <button class="btn btn-primary do-reply">Reply</button>
                                </form>
                                </div>
                                {{-- write a reply --}}
                            {{-- reply start --}}
                            @foreach ($comment->replies as $reply)
                            <div class="comment-box children mt-2">
                            <div class="comment-user-avatar">
                                    @if ($reply->replyable->getFirstMediaUrl('profile','thumb'))
										<img alt="madol" src="{{ $reply->replyable->getFirstMediaUrl('profile','thumb')}}" class="list-thumbnail rounded-circle" height="50" width="50">
									@else
									<img alt="madol" src="{{ asset('img/default.jpg') }}"class="list-thumbnail rounded-circle" height="50" width="50">
									@endif
                            </div>
                            <div class="comment-content">
                            <span class="comment-time">{{ $reply->created_at->diffForHumans() }}</span>
                                <h6 class="no-margin font-weight-normal">{{ $reply->replyable->name }}</h6>
                            <p>{{ $reply->reply }}</p>
                            </div>
                            </div>
                            @endforeach
                             {{-- reply end --}}
                            
                        </div>
                        </div>
                        @endforeach
                        
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
                                <li><a href="{{ $tag->tag_path() }}">{{ $tag->tag_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Sidebar box 6 - Facebook Like box -->
                    <div class="sidebar-box text-center">
                        <h6 class="heading-uppercase">Follow On</h6>
                        <ul class="list-horizontal-unstyled">
                                <li><a href="{{ $post->author->profile->facebook }}" target="_blank"><i class="icon-social-facebook"></i></a></li>
								<li><a href="{{ $post->author->profile->twitter }}" target="_blank"><i class="icon-social-twitter"></i></a></li>
							</ul>
                    </div>
                    <!-- Sidebar box 7 - Subscribe -->
                    <div class="sidebar-box">
                        <h6 class="heading-uppercase">Subscribe</h6>
                        <form method="POST" action="{{ route('subscribe.store') }}">
                            @csrf
                            <input type="text" placeholder="Email Address.." name="email" required>
                            <button type="submit" class="button button-lg button-grey button-fullwidth">Sign Up</button>
                        </form>
                    </div>
                </div>
                <!-- end Blog Sidebar -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Blog Post section -->
    @endsection