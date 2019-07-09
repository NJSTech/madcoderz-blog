@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.fileUpload') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="avatar" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <input type="submit" name="submit">
                      </form>
                      <img src="{{ $avatars->getUrl() }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
