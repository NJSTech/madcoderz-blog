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
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">All Tags</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-content table-responsive">
                                        <div class="table-body hw45">
                                            <table class="table table-md table-hover va-middle">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Tag Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tags as $tag)
                                                        <tr>
                                                            <td>{{ $tag->tag_name }}</td>                                                       
                                                            <td class="action-buttons">
                                                            <a href="{{ route('tags.edit',$tag->id) }}" class=""><i class="icon-pencil"></i></a>
                                                            <a href="" class="tag-destroy" data-id="{{ $tag->id }}"><i class="icon-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $tags->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end col-12 --}}
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">Create Tags</h5>
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

                                <form method="POST" action="{{ route('tags.store') }}" enctype="multipart/form-data" accept-charset="UTF-8">
                                    @csrf
                                    <div class="form-group">
                                      <label for="tag-name" class="col-form-label">Tag Name:</label>
                                    <input type="text" name="tag_name" value="{{ old('tag_name') }}" class="form-control" id="tag-name" required>
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
