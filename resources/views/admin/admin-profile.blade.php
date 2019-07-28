@extends('admin.layouts.master')
@push('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="{{ asset('js/post.js') }}"></script>
@endpush
@section('content')
<div class="page-content">
                    <!--Page title-->
                    <div class="page-title d-flex justify-content-between">
                        <h5> Profile </h5>
                        <p class="mb-0"><a href="javascript:void(0)">Home</a> | <span>Profile</span></p>
                    </div>
                    <!--end page title-->
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
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">Update Profile</h5>
                                </div>
                                <div class="card-body">
                                    
                                <form method="POST" action="{{ route('admin.update',$admin->id) }}" enctype="multipart/form-data" accept-charset="UTF-8">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Name:</label>
                                        <input type="text" name="name" value="{{ $admin->name }}" class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">E-mail:</label>
                                        <input type="email" name="email" value="{{ $admin->email }}" class="form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="col-form-label">Image:</label>
                                        <input type="file" name="image" value="" class="form-control" id="image">
                                        <img src="{{ $admin->getFirstMediaUrl('profile','thumb') }}" alt="" height="80" width="80" class="mt-3">
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="col-form-label">Status:</label>
                                        <label class="radio-inline"><input type="radio" class="status" name="status" value="1" {{ $admin->status == 1 ? 'checked' : '' }}>Active</label>
                                        <label class="radio-inline"><input type="radio" class="status" name="status" value="0" {{ $admin->status == 0 ? 'checked' : '' }}>InActive</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="job_title" class="col-form-label">Job Title:</label>
                                        <input type="text" name="job_title" value="{{ $admin->job_title }}" class="form-control" id="job_title" required>
                                    </div>
                                  <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </form>
                                </div>
                            </div>
                        </div>
                        {{-- end col-6 --}}
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">Update Profile</h5>
                                </div>
                                <div class="card-body">
                                    
                                <form method="POST" action="{{ route('admin.profile.update',$admin->profile->id) }}" enctype="multipart/form-data" accept-charset="UTF-8">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="about" class="col-form-label">About:</label>
                                        <textarea name="about" id="about" class="form-control" cols="30" rows="5" >{{ $admin->profile->about }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook" class="col-form-label">Facebook:</label>
                                        <input type="text" name="facebook" value="{{ $admin->profile->facebook }}" class="form-control" id="facebook" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter" class="col-form-label">Twitter:</label>
                                        <input type="text" name="twitter" value="{{ $admin->profile->twitter }}" class="form-control" id="twitter" required>
                                    </div>
                                  <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </form>
                                </div>
                            </div>
                        </div>
                        {{-- col-md-6 --}}
                    </div>
                </div>
@endsection
