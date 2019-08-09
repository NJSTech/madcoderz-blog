@extends('layouts.master')

@section('content')
    <!-- Blog Post section -->
    <div class="section">
        <div class="container">
            <div class="row col-spacing-50">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="card ">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="text-uppercase">Update Profile</h5>
                        </div>
                        <div class="card-body">
                            
                        <form method="POST" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data" accept-charset="UTF-8">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="col-form-label">Name:</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">E-mail:</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-form-label">Image:</label>
                                <input type="file" name="image" value="" class="form-control" id="image">
                                <img src="{{ $user->getFirstMediaUrl('profile','thumb') }}" alt="" height="80" width="80" class="mt-3">
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
                            
                        <form method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data" accept-charset="UTF-8">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="about" class="col-form-label">About:</label>
                                <textarea name="about" id="about" class="form-control" cols="30" rows="5" >{{ $user->profile['about'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="facebook" class="col-form-label">Facebook:</label>
                                <input type="text" name="facebook" value="{{ $user->profile['facebook'] }}" class="form-control" id="facebook" required>
                            </div>
                            <div class="form-group">
                                <label for="twitter" class="col-form-label">Twitter:</label>
                                <input type="text" name="twitter" value="{{ $user->profile['twitter'] }}" class="form-control" id="twitter" required>
                            </div>
                            <input type="hidden" name="profile_id" value="{{ $user->profile['id'] }}">
                          <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                        </form>
                        </div>
                    </div>
                </div>
                {{-- col-md-6 --}}
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Blog Post section -->
    @endsection