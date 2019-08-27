<header class="topbar clearfix">
    <div class="container-fluid">
        <div class="topbar-main">
            <!--navbar Logo section left-->
            <div class="topbar-left">
                <div class="main-logo m-0 p-0">
                    <a href="{{ route('admin.dashboard') }}" class="logo">
                        <span>
                        <img src="{{ asset('img/logo.svg') }}" alt="madcoderz-blog">
                        </span>
                        <i><img src="{{ asset('img/logo.svg') }}" alt="madcoderz-blog"></i>
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
                        
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row nav-right pl-0 mb-0 m-20 order-2">
                    <li class="dropdown nav-profile hw35 pr-3">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="nav-link arrow-none">
                            @php
                                $admin=\App\Models\Admin::find(Auth::guard('admin')->user()->id);   
                            @endphp
                            <img src="{{ $admin->getFirstMediaUrl('profile','thumb')}}" alt="" class="list-thumbnail rounded-circle">
                        </a>
                        <div class="dropdown-menu hw45 dropdown-box-grid">
                            <ul class="dropdown-inner p-2">
                                <li class="pb-3">
                                    <div class="dd-userbox d-flex flex-row">
                                        <div class="dd-img">
                                            <img alt="madol" src="{{ $admin->getFirstMediaUrl('profile','thumb')}}"
                                                class="rounded-circle">
                                        </div>
                                        <div class="dd-info">
                                            <h4>{{ Auth::guard('admin')->user()->name }}</h4>
                                            <p>{{ Auth::guard('admin')->user()->email }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="main pb-3">
                                    <a href="{{ route('admin.change.password') }}">
                                        <i class="icon-key mr-2"></i> Change Password</a>
                                </li>
                                <li class="main pb-3">
                                    <a href="{{ route('admin.profile',Auth::guard('admin')->user()->id) }}">
                                        <i class="icon-user mr-2"></i> Profile</a>
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