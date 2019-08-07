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
                            <div class="col-4">
                                    @guest('web')
                                    <a class="heading-uppercase p-1 post-icon" href="javascript:void(0)" onclick="toastr.info('To add your favourite list,You need to Login first.','Info',{
                                        closeButton:true,
                                        progressBar:true,
                                    })"><i class="icon-heart i-post"></i>{{ $post->favourite_to_users->count() }}</a>
                                    @else
                                    <a class="heading-uppercase p-1 post-icon " href="javascript:void(0)" onclick="document.getElementById('favourite-form-{{ $post->id }}').submit()">
                                        <i class="icon-heart i-post p-1 {{ !Auth::user()->favourite_posts->where('pivot.post_id',$post->id)->count() ==0 ? 'favourite-post' :' ' }}"></i>{{ $post->favourite_to_users->count() }}
                                    </a>
                                    <form id="favourite-form-{{ $post->id }}" method="POST" action="{{ route('favourite.store',$post->id) }}">
                                        @csrf
                                    </form>
                                    @endguest
                                    <a class="heading-uppercase p-1 post-icon" href="javascript:void(0)"><i class="icon-eye i-post p-1"></i>{{ $post->view_count }}</a>
                                </div>
                        <div class="col-4">
                            <ul class="list-horizontal">
                                @foreach($post->tags as $tag)
                                    <li><a class="hyperlink-1" href="{{ $tag->tag_path() }}">{{ $tag->tag_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-4 text-right">
                            <ul class="list-horizontal-unstyled">
                                <li>
                                    @php
                                        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                    @endphp
                                    <iframe src="https://www.facebook.com/plugins/share_button.php?href={{ $actual_link}}&layout=button&size=large&width=73&height=28&appId" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                </li>
                                <li><a class="twitter-share-button"
                                href="https://twitter.com/intent/tweet?text={{ $actual_link }}" data-size="large">
                                  Tweet</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end Post Tags / Share -->
                     <!-- Write a Comment -->
                     <div class="border-top margin-top-60">
                        <h5 class="margin-top-50 margin-bottom-30">Write a Comment</h5>
                        <form method="POST" action="{{ route('comment.store') }}" enctype="multipart/form-data" accept="UTF-8">
                            @csrf
                            <textarea name="comment" placeholder="Message" required>{{ old('comment') }}</textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            @guest
                            <button class="button button-lg button-grey float-right" type="button" onclick="toastr.info('To add a comment,You need to Login first.','Info',{
                                closeButton:true,
                                progressBar:true,
                            })">Post Comment</button>
                            @else
                            <button class="button button-lg button-grey float-right" type="submit">Post Comment</button>
                            @endguest
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
                                    <textarea name="reply" class="reply-input adjust-reply reply" rows="1" cols="3" placeholder="Add a Reply" required></textarea>
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
                            <li><a href="{{ $post->author->profile->facebook }}" target="_blank"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="{{ $post->author->profile->twitter }}" target="_blank"><i class="icon-social-twitter"></i></a></li>
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
                        @foreach ($populars as $popular)
                        <div class="popular-post">
                        <a href="{{ $popular->path() }}"><img src="{{ $popular->getFirstMediaUrl('post','thumb') }}" alt="{{ $popular->category->category_name }}"></a>
                            <div>
                            <p class="font-weight-normal"><a href="{{ $popular->path() }}">{{ $popular->title }}</a></p>
                            <span>{{ date('M d Y',strtotime($popular->created_at)) }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Sidebar box 4 - Tags -->
                    <div class="sidebar-box">
                        <h6 class="heading-uppercase">Tags</h6>
                        <ul class="tags">
                            @foreach($tags as $tag)
                                <li><a href="{{ $tag->tag_path() }}">{{ $tag->tag_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Sidebar box 5 - Facebook Like box -->
                    <div class="sidebar-box text-center">
                        <h6 class="heading-uppercase">Follow On</h6>
                        <ul class="list-horizontal-unstyled">
                                <li><a href="{{ $post->author->profile->facebook }}" target="_blank"><i class="icon-social-facebook"></i></a></li>
								<li><a href="{{ $post->author->profile->twitter }}" target="_blank"><i class="icon-social-twitter"></i></a></li>
							</ul>
                    </div>
                    <!-- Sidebar box 6  - Subscribe -->
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