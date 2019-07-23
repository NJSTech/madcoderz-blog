@extends('admin.layouts.master')

@section('content')
<div class="page-content">
                    <!--Page title-->
                    <div class="page-title d-flex justify-content-between">
                        <h5> Tags </h5>
                        <p class="mb-0"><a href="javascript:void(0)">Home</a> | <span>Tag</span></p>
                    </div>
                    <!--end page title-->
                    
                    <div class="row">
                        {{-- end col-12 --}}
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">Edit Tags</h5>
                                    <a class="btn btn-info" href="{{ route('tags.index') }}">
                                        All Tags
                                    </a>
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
                                <form method="POST" action="{{ route('tags.update',$tag->id) }}" enctype="multipart/form-data" accept-charset="UTF-8">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                      <label for="tag-name" class="col-form-label">Tag Name:</label>
                                    <input type="text" name="tag_name" value="{{ $tag->tag_name }}" class="form-control" id="tag-name" required>
                                    </div>
                                  <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        {{-- end col --}}
                    </div>
                </div>
@endsection
