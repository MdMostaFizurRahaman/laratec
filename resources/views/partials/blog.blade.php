<div class="container">
    <div class="latest-news">
        <div class="latest-news-intro text-center">
            <h2 class="title30 font-bold">Latest News from the Blog</h2>
            <a href="{{route('blog')}}" class="shop-button color">View All <i class="icon ion-android-arrow-forward"></i></a>
        </div>
        <div class="list-latest-post">
            <div class="wrap-item" data-pagination="false" data-itemscustom="[[0,1],[560,2],[990,3]]">
                @foreach ($posts->take(3) as $post)
                    <div class="item-post drop-shadow">
                        <div class="banner-adv overlay-image zoom-image">
                            <a href="#" class="adv-thumb-link"><img src="{{$post->getFirstMediaUrl('posts')}}" alt="post-image" /></a>
                        </div>
                        <div class="post-info">
                            <h3 class="title18 font-bold"><a href="#">{{$post->title}} </a></h3>
                            <span class="color post-date"><i class="icon ion-calendar"></i>{{$post->createdAt->diffForHumans()}}</span>
                            <p class="desc">{{Str::limit($post->description, 150)}}</p>
                            <a href="{{route('blog.show', $post->id)}}" class="shop-button color">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Latest News -->
</div>
