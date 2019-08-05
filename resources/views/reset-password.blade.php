@extends('layouts.master')

@section('content')
<!-- Contact Info section -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-text">Change Password</h6>
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
                <form method="POST" action="{{ route('user.password.reset.request') }}" enctype="multipart/form-data" accept-charset="UTF-8">
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
            {{-- end card body --}}
            </div>
            {{-- end card --}}
            </div>
            {{-- end col-md-8 --}}
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- end Contact Info section -->
    @endsection