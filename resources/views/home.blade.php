@extends('layouts.master')

@section('content')
		<!-- Category section -->
		<div class="section no-padding-bottom">
			<div class="container">
				<div class="row col-spacing-20">
					<div class="owl-carousel">
					@foreach ($categories as $category)
						<div class="item">
						<div class="hoverbox-8">
						<a href="{{ $category->category_path() }}">
								<img src="{{ $category->getFirstMediaUrl('category','thumb') }}" alt="{{ $category->category_name }}">
								<div class="content">
								<h6 class="heading-uppercase no-margin">{{ $category->category_name }}</h6>
								</div>
							</a>
						</div>
						</div>
					@endforeach
				</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
		<!-- end Category section -->

		<div class="section">
			<div class="container">
				<div class="row col-spacing-50">
					<div class="col-12 col-lg-8 col-md-8">
						<!-- Blog Post box 1 -->
						@foreach($posts as $post)
						<div class="margin-bottom-50">
							<div class="hoverbox-8">
								<a href="{{ $post->path() }}">
								<img src="{{ $post->getFirstMediaUrl('post') }}" alt="{{ $post->category->category_name }}">
								</a>
							</div>
							<div class="margin-top-30">
								<div class="d-flex justify-content-between margin-bottom-10">
									<div class="d-inline-flex">
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
									<div class="d-inline-flex">
										@foreach ($post->tags as $tag)
										<a class="heading-uppercase p-1" href="{{ $tag->tag_path() }}">{{ $tag->tag_name }}</a>
										@endforeach
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
						@endforeach
						{{-- post box end --}}
						<!-- Pagination -->
						{{ $posts->links() }}
					</div>
					<!-- end Blog Posts -->
					@include('partials._sidebar')
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
@endsection
