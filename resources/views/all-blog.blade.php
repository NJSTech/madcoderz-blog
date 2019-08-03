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
                        @empty
                            <h6>No Posts Available</h6>
						@endforelse
                    <!-- Pagination -->
                    {{ $posts->links() }}
                </div>
                <!-- end Blog Posts -->

                @include('partials._sidebar')
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Blog section -->
    @endsection