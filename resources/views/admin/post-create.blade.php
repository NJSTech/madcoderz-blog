@extends('admin.layouts.master')
@push('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="{{ asset('js/post.js') }}"></script>
@endpush
@section('content')
<div class="page-content">
                    <!--Page title-->
                    <div class="page-title d-flex justify-content-between">
                        <h5> Posts </h5>
                        <p class="mb-0"><a href="javascript:void(0)">Home</a> | <span>Post</span></p>
                    </div>
                    <!--end page title-->
                    
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">Create Posts</h5>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session()->has('error'))
                                <div class="alert alert-danger">{{ session()->get('error') }}</div>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" accept-charset="UTF-8">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="col-form-label">Post Title:</label>
                                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="col-form-label">Feature Image:</label>
                                        <input type="file" name="image" value="{{ old('image') }}" class="form-control" id="image" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category" class="col-form-label">Category:</label>
                                        <select class="form-control" name="category_id" value="{{ old('category') }}">
                                            <option value="">Select Here</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tag-multiple" class="col-form-label">Tag:</label>
                                        <select class="form-control tag" name="tags[]" multiple="multiple" id="tag-multiple">
                                            <option value="fdf">Select Here</option>
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="col-form-label">Status:</label>
                                        <label class="radio-inline"><input type="radio" class="gender" name="status" value="1">Publish</label>
                                        <label class="radio-inline"><input type="radio" class="gender" name="status" value="0">UnPublish</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="body" class="col-form-label">Body:</label>
                                        <textarea class="body" name="body" id="body">{!! old('body') !!}</textarea>
                                    </div>
                                  <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </form>
                                </div>
                            </div>
                        </div>
                        {{-- end col-12 --}}
                    </div>
                </div>
@endsection
