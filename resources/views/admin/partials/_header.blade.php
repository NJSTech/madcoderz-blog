<header class="topbar clearfix">
            <div class="container-fluid">
                <div class="topbar-main">
                    <!--navbar Logo section left-->
                    <div class="topbar-left">
                        <div class="main-logo m-0 p-0">
                            <a href="index.html" class="logo">
                                <span>
                                    <img src="http://www.madcoderz.com/madol/asset/images/logo-color.svg" alt="madol">
                                </span>
                                <i><img src="http://www.madcoderz.com/madol/asset/images/icon-logo.svg" alt="madol"></i>
                            </a>
                        </div>
                    </div>
                    <!--Topbar Logo section end-->
                    <!--navbar menu section right-->
                    <nav class="navbar-main navbar navbar-full d-flex flex-nowrap flex-row">
                        <ul class="navbar-nav nav-left d-flex flex-row pl-0 mb-0 order-1">
                            <li class="nav-item nav-menu text-center d-block">
                                <a href="javascript:void(0)" class="sidebar-toggle text-center">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                            <li class="nav-item pt-0 d-none d-sm-block">
                                <form role="search" class="app-search">
                                    <div class="form-group m-2 d-flex">
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <button type="submit"><i class="icon-magnifier"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-flex flex-row nav-right pl-0 mb-0 m-20 order-2">
                            
                            <li class="dropdown notification-list d-none d-sm-block">
                                <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link arrow-none">
                                    <i class="icon-bell notification-icon position-relative"></i>
                                    <span class="badge badge-pill badge-info">0</span>
                                </a>
                                <div class="dropdown-menu dropdown-box hw45">
                                    <div class="scroolbar-notification">
                                        <div class="d-flex flex-row p-3">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail rounded-circle">
                                            </a>
                                            <div class="pl-2">
                                                <a href="javascript:void(0)">
                                                    <p class="mb-1 text-medium">Jhon Doe just sent a new comment!</p>
                                                    <p class="text-muted text-small mb-0">09.07.2018 11.45</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="javascript:void(0)" class="text-primary">
                                            <p class="pt-3 text-uppercase">View All</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown nav-profile hw35 pr-3">
                                <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link arrow-none">
                                    <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="" class="list-thumbnail rounded-circle">
                                </a>
                                <div class="dropdown-menu hw45 dropdown-box-grid">
                                    <ul class="dropdown-inner p-2">
                                        <li class="pb-3">
                                            <div class="dd-userbox d-flex flex-row">
                                                <div class="dd-img">
                                                    <img alt="madol" src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" class="rounded-circle">
                                                </div>
                                                <div class="dd-info">
                                                    <h4>Vesa J Helenius</h4>
                                                    <p>example@example.com</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="main pb-3">
                                            <a href="profile.html"><i class="icon-user mr-2"></i> Profile</a>
                                        </li>
                                        <li class="main pb-3">
                                        <a href="{{ route('admin.logout') }}"><i class="icon-logout mr-2"></i> Sign Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!--navbar menu section right end-->
                </div>
            </div>
        </header>