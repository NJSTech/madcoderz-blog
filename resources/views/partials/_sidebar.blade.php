<!-- Blog Sidebar -->
<div class="col-12 col-lg-4 col-md-8 sidebar-wrapper">
    <!-- Sidebar box 1 - Categories -->
    <div class="sidebar-box">
        <h6 class="heading-uppercase">Categories</h6>
        <ul class="list-category">
            @foreach ($categories as $category)
                <li><a href="{{ $category->category_path() }}">{{ $category->category_name }} <span>{{ $category->posts()->count() }}</span></a></li>
            @endforeach
        </ul>
    </div>
    <!-- Sidebar box 2 - Popular Posts -->
    <div class="sidebar-box">
        <h6 class="heading-uppercase">Popular Posts</h6>
        <!-- Popular post 1 -->
        <div class="popular-post">
            <a href="#"><img src="/img/product-2.jpg" alt=""></a>
            <div>
                <h6 class="font-weight-normal"><a href="#">Street art wall</a></h6>
                <span>Feb 15, 2018</span>
            </div>
        </div>
        <!-- Popular post 2 -->
        <div class="popular-post">
            <a href="#"><img src="/img/product-2.jpg" alt=""></a>
            <div>
                <h6 class="font-weight-normal"><a href="#">Roasted coffee beans</a></h6>
                <span>Feb 15, 2018</span>
            </div>
        </div>
        <!-- Popular post 3 -->
        <div class="popular-post">
            <a href="#"><img src="/img/product-2.jpg" alt=""></a>
            <div>
                <h6 class="font-weight-normal"><a href="#">Artist at work</a></h6>
                <span>Feb 13, 2018</span>
            </div>
        </div>
    </div>
    <!-- Sidebar box 3 - Tags -->
    <div class="sidebar-box">
        <h6 class="heading-uppercase">Tags</h6>
        <ul class="tags">
            @foreach($tags as $tag)
                <li><a href="{{ $tag->tag_path() }}">{{ $tag->tag_name }}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- Sidebar box 4 - Facebook Like box -->
    <div class="sidebar-box text-center">
        <h6 class="heading-uppercase">Follow on</h6>
        <ul class="list-horizontal-unstyled">
            <li><a href="https://www.facebook.com/madcoderz" target="_blank"><i class="icon-social-facebook"></i></a></li>
            <li><a href="https://twitter.com/CoderzMad" target="_blank"><i class="icon-social-twitter"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCeRKu1G7QaViw5-oxv7iFTw" target="_blank"><i class="icon-social-youtube"></i></a></li>
        </ul>
    </div>
    <!-- Sidebar box 5 - Subscribe -->
    <div class="sidebar-box">
        <h6 class="heading-uppercase">Subscribe</h6>
        <form method="POST" action="{{ route('subscribe.store') }}">
            @csrf
            <input type="text" placeholder="Email Address.." name="email" required>
            <button type="submit" class="button button-lg button-grey button-fullwidth">Sign Up</button>
        </form>
    </div>
</div>
<!-- end Blog Sidebar -->