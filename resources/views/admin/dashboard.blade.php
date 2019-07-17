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
                                        <div class="round align-self-center round-aristocrat"><i class="icon-wallet"></i></div>
                                        <div class="ml-3 align-self-center">
                                            <h5 class="mb-0 card-text">$13000</h5>
                                            <h6 class="text-muted mb-0">Income</h6>
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
                                            <h5 class="mb-0 card-text">1200+</h5>
                                            <h6 class="text-muted mb-0">Customers</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card shadow-none">
                                <div class="card-body widget-success">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="icon-bag"></i></div>
                                        <div class="ml-3 align-self-center">
                                            <h5 class="mb-0 card-text">400+</h5>
                                            <h6 class="text-muted mb-0">Products</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card shadow-none">
                                <div class="card-body widget-warning">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-warning"><i class="icon-chart"></i></div>
                                        <div class="ml-3 align-self-center">
                                            <h5 class="mb-0 card-text">$24000</h5>
                                            <h6 class="text-muted mb-0">Sales</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-uppercase">Sales Progress</h5>
                                </div>
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col-4">
                                            <h5 class="card-text">12000+</h5>
                                            <p class="text-muted">Customers</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="card-text">$500000+</h5>
                                            <p class="text-muted">Orders</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="card-text">$150000</h5>
                                            <p class="text-muted">Revenue</p>
                                        </div>
                                    </div>
                                    <canvas id="areaChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header mb-0">
                                    <h5 class="text-uppercase">Order Status</h5>
                                </div>
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-text">$86241</h5>
                                            <p class="text-muted">Total Sales</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="card-text">$43651</h5>
                                            <p class="text-muted">Total Purchase</p>
                                        </div>
                                    </div>
                                    <canvas id="doughnutchart" height="310" width="280"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="text-uppercase">New Orders</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-content table-responsive">
                                        <div class="table-body hw45">
                                            <table class="table table-md table-hover va-middle">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Order No</th>
                                                        <th>Image</th>
                                                        <th>Product</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1000</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/products/thumb/bag3-thumb.jpg" alt="madol"></td>
                                                        <td>Mam nano</td>
                                                        <td>5</td>
                                                        <td>$50</td>
                                                        <td class="action-buttons"><a href="javascript:void(0)"><i class="icon-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1001</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/products/thumb/bag4-thumb.jpg" alt="madol"></td>
                                                        <td>Mam nano</td>
                                                        <td>5</td>
                                                        <td>$50</td>
                                                        <td class="action-buttons"><a href="javascript:void(0)"><i class="icon-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1002</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/products/thumb/dom-thumb.jpg" alt="madol"></td>
                                                        <td>Mam nano</td>
                                                        <td>5</td>
                                                        <td>$50</td>
                                                        <td class="action-buttons"><a href="javascript:void(0)"><i class="icon-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1003</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/products/thumb/si1-thumb.jpg" alt="madol"></td>
                                                        <td>Mam nano</td>
                                                        <td>5</td>
                                                        <td>$50</td>
                                                        <td class="action-buttons"><a href="javascript:void(0)"><i class="icon-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1004</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/products/thumb/Sk31-thumb.jpg" alt="madol"></td>
                                                        <td>Mam nano</td>
                                                        <td>5</td>
                                                        <td>$50</td>
                                                        <td class="action-buttons"><a href="javascript:void(0)"><i class="icon-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1005</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/products/thumb/Sk01-thumb.jpg" alt="madol"></td>
                                                        <td>Mam nano</td>
                                                        <td>5</td>
                                                        <td>$50</td>
                                                        <td class="action-buttons"><a href="javascript:void(0)"><i class="icon-eye"></i></a></td>
                                                    </tr>
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
                                    <h5>Quick Notes</h5>
                                </div>
                                <div class="card-body">
                                    <div class="quicknote">
                                        <div class="todo-box">
                                            <ul class="todo-list">
                                                <li class="todo-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="to-do custom-control-input" type="checkbox" id="0">
                                                        <label class="custom-control-label" for="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <hr class="light-grey-hr">
                                                </li>
                                                <li class="todo-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="to-do custom-control-input" type="checkbox" id="1">
                                                        <label class="custom-control-label" for="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <hr class="light-grey-hr">
                                                </li>
                                                <li class="todo-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="to-do custom-control-input" type="checkbox" id="2">
                                                        <label class="custom-control-label" for="2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <hr class="light-grey-hr">
                                                </li>
                                                <li class="todo-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="to-do custom-control-input" type="checkbox" id="3">
                                                        <label class="custom-control-label" for="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <hr class="light-grey-hr">
                                                </li>
                                                <li class="todo-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="to-do custom-control-input" type="checkbox" id="4">
                                                        <label class="custom-control-label" for="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <hr class="light-grey-hr">
                                                </li>
                                                <li class="todo-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="to-do custom-control-input" type="checkbox" id="5">
                                                        <label class="custom-control-label" for="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="new-todo">
                                        <form method="post" enctype="multipart/form-data" id="add_todo" novalidate="novalidate">
                                            <div class="input-group">
                                                <input type="text" id="todo_data" name="todo_data" class="form-control" placeholder="New To Do">
                                                <span class="input-group-btn">
                                                    <input type="hidden" name="userid" id="userid" value="U375">
                                                    <button type="submit" class="todo-submit"><i class="fa fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="text-uppercase">
                                        Inbox
                                    </h5>
                                    <p class="subhead text-uppercase">Unread Messages</p>
                                </div>
                                <div class="card-body">
                                    <div class="inbox-content hw45">
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Jhon Snow</p>
                                                    <p class="text-muted inbox-details mb-0">Jhon Doe just sent a ...</p>
                                                </a>
                                            </div>
                                            <div class="inbox-date text-muted">
                                                <p>10:20 AM</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U375-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Era Lara</p>
                                                    <p class="text-muted inbox-details mb-0">Jhon Doe just sent a ...</p>
                                                </a>
                                            </div>
                                            <div class="inbox-date text-muted">
                                                <p>10:20 AM</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U281-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Jhon Doe</p>
                                                    <p class="text-muted inbox-details mb-0">Jhon Doe just sent a ...</p>
                                                </a>
                                            </div>
                                            <div class="inbox-date text-muted">
                                                <p>10:20 AM</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U100-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Michael Scofield</p>
                                                    <p class="text-muted inbox-details mb-0">Jhon Doe just sent a ...</p>
                                                </a>
                                            </div>
                                            <div class="inbox-date text-muted">
                                                <p>10:20 AM</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Testimony</p>
                                                    <p class="text-muted inbox-details mb-0">Jhon Doe just sent a ...</p>
                                                </a>
                                            </div>
                                            <div class="inbox-date text-muted">
                                                <p>10:20 AM</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Testimony</p>
                                                    <p class="text-muted inbox-details mb-0">Jhon Doe just sent a ...</p>
                                                </a>
                                            </div>
                                            <div class="inbox-date text-muted">
                                                <p>10:20 AM</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0)" class="text-medium">
                                                <p class="pt-3 text-uppercase">View All</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-uppercase">
                                        Best sellers
                                    </h5>
                                    <p class="subhead text-uppercase">Overview Of last Month</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-content table-responsive">
                                        <div class="table-body hw45">
                                            <table class="table table-hover va-middle">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>User name</th>
                                                        <th>Image</th>
                                                        <th>Sales</th>
                                                        <th>Budget</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Vesa J Helenius</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="madol"></td>
                                                        <td>$22000</td>
                                                        <td>$21500</td>
                                                        <td><span class="badge badge-success badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Era Lara</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U375-thumb.jpg" alt="madol"></td>
                                                        <td>$21000</td>
                                                        <td>$19500</td>
                                                        <td><span class="badge badge-success badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jhon Doe</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U281-thumb.jpg" alt="madol"></td>
                                                        <td>$21000</td>
                                                        <td>$19500</td>
                                                        <td><span class="badge badge-success badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Scofield</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U101-thumb.jpg" alt="madol"></td>
                                                        <td>$22000</td>
                                                        <td>$21500</td>
                                                        <td><span class="badge badge-warning badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hugh O</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U102-thumb.jpg" alt="madol"></td>
                                                        <td>$18000</td>
                                                        <td>$16500</td>
                                                        <td><span class="badge badge-danger badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Frank Lynch</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U103-thumb.jpg" alt="madol"></td>
                                                        <td>$22000</td>
                                                        <td>$16500</td>
                                                        <td><span class="badge badge-danger badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alan Mccarthy</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U105-thumb.jpg" alt="madol"></td>
                                                        <td>$22000</td>
                                                        <td>$21500</td>
                                                        <td><span class="badge badge-success badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jhon Doe</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U281-thumb.jpg" alt="madol"></td>
                                                        <td>$22000</td>
                                                        <td>$21500</td>
                                                        <td><span class="badge badge-success badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jhon Doe</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U281-thumb.jpg" alt="madol"></td>
                                                        <td>$22000</td>
                                                        <td>$21500</td>
                                                        <td><span class="badge badge-success badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jhon Doe</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U281-thumb.jpg" alt="madol"></td>
                                                        <td>$22000</td>
                                                        <td>$21500</td>
                                                        <td><span class="badge badge-success badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jhon Doe</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U281-thumb.jpg" alt="madol"></td>
                                                        <td>$22000</td>
                                                        <td>$21500</td>
                                                        <td><span class="badge badge-success badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jhon Doe</td>
                                                        <td><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U281-thumb.jpg" alt="madol"></td>
                                                        <td>$22000</td>
                                                        <td>$21500</td>
                                                        <td><span class="badge badge-success badge-rounded">Top Seller</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
