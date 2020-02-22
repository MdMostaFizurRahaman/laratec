<div class="container">
    <div class="product-trending-box">
        <h2 class="title30 title-line-after font-bold">Trending</h2>
        <div class="product-trend-slider">
            <div class="wrap-item group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,4]]">
                @foreach ($products as $product)
                <div class="item-product text-center style1">
                    <div class="product-thumb">
                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{$product->getFirstMediaUrl('product-home')}}" alt="product-image" /></a>
                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                    </div>
                    <div class="product-info">
                        <a href="#" class="cat-parent color">{{$product->category->name}}</a>
                        <h3 class="title16 font-bold product-title"><a href="#">{{$product->name}}</a></h3>
                        <div class="product-price">
                            <ins class="font-bold"><span>{{money($product->price)}}</span></ins>
                        </div>
                        <div class="product-extra-link style1">
                            <a href="#" class="wishlist-link color title30"><i class="icon ion-android-favorite-outline"></i></a>
                        <a href="#" class="addcart-link shop-button color">View Details </a>
                            <a href="#" class="compare-link color title30"><i class="icon ion-ios-checkmark-outline"></i></a>
                        </div>
                        <div class="product-rate">
                            <div class="product-rating" style="width:100%"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Trending Box -->
</div>

{{-- Feature Section --}}
<div class="parallax featured-banner-product" data-image="{{!empty($feature) ? $feature->getFirstMediaUrl('general') : "theme/images/home/home1/banner1.jpg"}}">
    <div class="banner-info">
        <div class="container">
            <div class="featured-banner-info wow zoomIn">
                <h3 class="title30 title-line-after">Featured</h3>
                <h2 class="title60 color">{{!empty($feature) ? $feature->title : null}}</h2>
                <h3 class="title30 silver font-light">{{!empty($feature) ? $feature->subtitle : null}}</h3>
                <h3 class="title30 font-light color">{{money(!empty($feature) ? $feature->price : 0)}}</h3>
                <div class="banner-button">
                    <a href="{{!empty($feature) ? $feature->shopNowLink : null}}" class="shop-button color">Shop Now</a>
                    <a href="{{!empty($feature) ? $feature->detailsLink : null}}" class="shop-button bg-color2">More Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
