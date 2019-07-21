<aside class="sidebar">
            <div class="mini-sidebar container-fluid">
                <div class="sidebar-nav">
                    <div class="sidebar-header text-center">
                        <figure class="side-user-bg">

                        </figure>
                        <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="" class="rounded-circle">
                        <h5 class="text-center text-medium">Vesa J Helenius</h5>
                    </div>
                    <ul class="metismenu" id="menu">
                        <li {{ (Request::is('*dashboard') ? 'class=active' : '') }}>
                        <a class="" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                                <i class="icon-grid"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li {{ (Request::is('*categories') ? 'class=active' : '') }}>
                        <a class="" href="{{ route('categories.index') }}" aria-expanded="false">
                                <i class="icon-notebook"></i>
                                <span>Category</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>