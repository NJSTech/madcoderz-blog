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
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">All Categories</h5>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#categoryModal">
                                            Create Category
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-content table-responsive">
                                        <div class="table-body hw45">
                                            <table class="table table-md table-hover va-middle">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Category Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categories as $category)
                                                        <tr>
                                                            <td>{{ $category->category_name }}</td>
                                                            <td class="action-buttons"><a href="javascript:void(0)"><i class="icon-eye"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $categories->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
            <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">Create Category</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data" accept-charset="UTF-8">
                        @csrf
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="category-name" class="col-form-label">Category Name:</label>
                          <input type="text" name="name" class="form-control" id="category-name" required>
                        </div>
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Image:</label>
                          <input type="file" name="image" class="form-control" accept="image/*" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                  </div>
                </div>
            </div>
@endsection
