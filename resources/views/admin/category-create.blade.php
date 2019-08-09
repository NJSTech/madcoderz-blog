@extends('admin.layouts.master')

@section('content')
<div class="page-content">
                    <!--Page title-->
                    <div class="page-title d-flex justify-content-between">
                        <h5> Categories </h5>
                        <p class="mb-0"><a href="javascript:void(0)">Home</a> | <span>Category</span></p>
                    </div>
                    <!--end page title-->
                    
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">All Categories</h5>
                                <a  class="btn btn-info" href="{{ route('categories.index') }}">
                                            All Category
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

                                <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data" accept-charset="UTF-8">
                                    @csrf
                                    <div class="form-group">
                                      <label for="category-name" class="col-form-label">Category Name:</label>
                                    <input type="text" name="category_name" value="{{ old('category_name') }}" class="form-control" id="category-name" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="message-text" class="col-form-label">Image:</label>
                                      <input type="file" name="image" class="form-control" accept="image/*" required>
                                    </div>
                                  <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
