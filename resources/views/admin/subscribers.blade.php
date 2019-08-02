@extends('admin.layouts.master')

@section('content')
<div class="page-content">
                    <!--Page title-->
                    <div class="page-title d-flex justify-content-between">
                        <h5> Subscribers </h5>
                        <p class="mb-0"><a href="javascript:void(0)">Home</a> | <span>Subscribers</span></p>
                    </div>
                    <!--end page title-->
                    <div class="flashmessage"></div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">All Subscribers</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-content table-responsive">
                                        <div class="table-body hw45">
                                            <table class="table table-md table-hover va-middle">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Email</th>
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($subscribers as $subscribe)
                                                        <tr>
                                                            <td>{{ $subscribe->email }}</td>
                                                            <td>{{ date('M d Y',strtotime($subscribe->created_at)) }}</td>
                                                            <td class="action-buttons">
                                                                <a href="" class="subscribe-destroy" data-id="{{ $subscribe->id }}"><i class="icon-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $subscribers->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
