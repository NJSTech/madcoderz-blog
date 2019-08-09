@extends('admin.layouts.master')

@section('content')
<div class="page-content">
                    <!--Page title-->
                    <div class="page-title d-flex justify-content-between">
                        <h5> Dashboard </h5>
                        <p class="mb-0"><a href="javascript:void(0)">Home</a> | <span>Dashboard</span></p>
                    </div>
                    <!--page title-->
                    <div class="row">
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card shadow-none">
                                <div class="card-body widget-aristocrat">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-aristocrat"><i class="icon-note"></i></div>
                                        <div class="ml-3 align-self-center">
                                            <h5 class="mb-0 card-text">{{ $posts->count() }}</h5>
                                            <h6 class="text-muted mb-0">Posts</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card shadow-none">
                                <div class="card-body widget-info">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-info"><i class="icon-user"></i></div>
                                        <div class="ml-3 align-self-center">
                                            <h5 class="mb-0 card-text">{{ $users->count() }}</h5>
                                            <h6 class="text-muted mb-0">Users</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card shadow-none">
                                <div class="card-body widget-success">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="icon-notebook"></i></div>
                                        <div class="ml-3 align-self-center">
                                            <h5 class="mb-0 card-text">{{ $categories->count() }}</h5>
                                            <h6 class="text-muted mb-0">Categories</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card shadow-none">
                                <div class="card-body widget-warning">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-warning"><i class="icon-envelope"></i></div>
                                        <div class="ml-3 align-self-center">
                                        <h5 class="mb-0 card-text">{{ $subscribers->count() }}</h5>
                                            <h6 class="text-muted mb-0">Subscribers</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="text-uppercase">New Posts</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-content table-responsive">
                                        <div class="table-body hw45">
                                            <table class="table table-md table-hover va-middle">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Title</th>
                                                        <th>Image</th>
                                                        <th>Category</th>
                                                        <th>Favourite</th>
                                                        <th>Views</th>
                                                        <th>Author</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($newposts as $key => $post)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ substr($post->title,0,25).'...' }}</td>
                                                            <td><img class="rounded-circle" src="{{ $post->getFirstMediaUrl('post','thumb') }}" alt=""></td>
                                                            <td>{{ $post->category->category_name }}</td>
                                                            <td>{{ $post->favourite_to_users->count() }}</td>
                                                            <td>{{ $post->view_count }}</td>
                                                            <td>{{ $post->author->name }}</td>
                                                            <td class="action-buttons"><a href="{{ route('posts.edit',$post->id) }}" class=""><i class="icon-pencil"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card ">
                                <div class="card-header">
                                    <h5>New Subscribers</h5>
                                </div>
                                <div class="table-content table-responsive">
                                        <div class="table-body hw45">
                                            <table class="table table-hover va-middle">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($newsubscribers as $key => $subscriber)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $subscriber->email }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
