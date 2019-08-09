@extends('admin.layouts.master')

@section('content')
<div class="page-content">
                    <!--Page title-->
                    <div class="page-title d-flex justify-content-between">
                        <h5> Change Password </h5>
                        <p class="mb-0"><a href="javascript:void(0)">Home</a> | <span>Change Password</span></p>
                    </div>
                    <!--end page title-->
                    
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">Change Password</h5>
                                </div>
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
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.password.reset.request') }}" enctype="multipart/form-data" accept-charset="UTF-8">
                                        @csrf
                                        <div class="form-group">
                                            <label for="old-password" class="col-form-label">Current Password:</label>
                                            <input type="password" name="current_password" value="" class="form-control" id="old-password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">New Password:</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" class="form-control" required>
                                        </div>
                                      <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
