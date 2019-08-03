<!-- Blog Sidebar -->
<div class="col-12 col-lg-4 col-md-8 sidebar-wrapper">
    <!-- Sidebar box 1 - Categories -->
    <div class="sidebar-box">
        <h6 class="heading-uppercase">Categories</h6>
        <ul class="list-category">
            @foreach ($categories as $category)
                <li><a href="{{ $category->category_path() }}">{{ $category->category_name }} <span>{{ $category->posts()->published()->count() }}</span></a></li>
            @endforeach
        </ul>
    </div>
    <!-- Sidebar box 2 - Popular Posts -->
    <div class="sidebar-box">
        <h6 class="heading-uppercase">Popular Posts</h6>
        <!-- Popular post 1 -->
        @foreach ($populars as $popular)
        <div class="popular-post">
        <a href="{{ $popular->path() }}"><img src="{{ $popular->getFirstMediaUrl('post','thumb') }}" alt="{{ $popular->category->category_name }}"></a>
            <div>
            <p class="font-weight-normal"><a href="{{ $popular->path() }}">{{ $popular->title }}</a></p>
            <span>{{ date('M d Y',strtotime($popular->created_at)) }}</span>
            </div>
        </div>
        @endforeach
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