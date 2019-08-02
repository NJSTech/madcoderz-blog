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
                        <li {{ (Request::is('*categories*') ? 'class=active' : '') }}>
                        <a class="" href="{{ route('categories.index') }}" aria-expanded="false">
                                <i class="icon-notebook"></i>
                                <span>Category</span>
                            </a>
                        </li>
                        <li {{ (Request::is('*tags*') ? 'class=active' : '') }}>
                        <a class="" href="{{ route('tags.index') }}" aria-expanded="false">
                                <i class="icon-tag"></i>
                                <span>Tag</span>
                            </a>
                        </li>
                        <li {{ (Request::is('*posts*') ? 'class=active' : '') }}>
                            <a class="" href="{{ route('posts.index') }}" aria-expanded="false">
                                <i class="icon-note"></i>
                                <span>Pots</span>
                            </a>
                            <ul aria-expanded="false" class="submenu collapse">
                                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                                <li><a href="{{ route('posts.create') }}">Create Post</a></li>
                            </ul>
                        </li>
                        <li {{ (Request::is('*subscribers*') ? 'class=active' : '') }}>
                            <a class="" href="{{ route('subscribe.index') }}" aria-expanded="false">
                                <i class="icon-list"></i>
                                <span>Subscribers</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>