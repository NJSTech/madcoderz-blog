@extends('admin.layouts.master')
@push('scripts')

@endpush
@section('content')
<div class="page-content">
                    <!--Page title-->
                    <div class="page-title d-flex justify-content-between">
                        <h5> Posts </h5>
                        <p class="mb-0"><a href="javascript:void(0)">Home</a> | <span>Post</span></p>
                    </div>
                    <!--end page title-->
                    <div class="flashmessage"></div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">All Posts</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-content table-responsive">
                                        <div class="table-body hw45">
                                            <table class="table table-md table-hover va-middle">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Thumb Image</th>
                                                        <th>Category</th>
                                                        <th>Created By</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($posts as $post)
                                                        <tr>
                                                            <td>{{ $post->title }}</td>                                                       
                                                        <td><img src="{{ $post->getFirstMediaUrl('post','thumb') }}" alt="{{ $post->title }}"></td> 
                                                            <td>{{ $post->category->category_name }}</td>                                                      
                                                            <td>{{ $post->author->name }}</td>                                                      
                                                            <td class="action-buttons">
                                                            <a href="{{ route('posts.edit',$post->id) }}" class=""><i class="icon-pencil"></i></a>
                                                            <a href="" class="post-destroy" data-id="{{ $post->id }}"><i class="icon-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $posts->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end col-12 --}}
                    </div>
                </div>
@endsection
