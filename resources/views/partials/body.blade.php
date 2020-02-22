<div class="container">
    @foreach ($homeCategories as $category)
        @if ($category->products()->exists())
            <div class="category-product-box">
                <h3 class="title30 font-bold title-line-after">{{$category->name}}</h3>
                <div class="category-product-slider">
                    <div class="wrap-item group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1]]">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="item-product text-center style1">
                                        <div class="product-thumb">
                                            <a href="#" class="product-thumb-link zoom-thumb"><img src="{{$category->products->first()->getFirstMediaUrl('product-image')}}" alt=""></a>
                                            <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="cat-parent color">{{$category->name}}</a>
                                            <h3 class="title16 font-bold product-title"><a href="#">{{$category->products->first()->name}}</a></h3>
                                            <div class="product-price">
                                                <ins class="font-bold"><span>{{money($category->products->first()->price)}}</span></ins>
                                            </div>
                                            <div class="product-extra-link style1">
                                                <a href="#" class="wishlist-link color title30"><i class="icon ion-android-favorite-outline"></i></a>
                                                <a href="#" class="addcart-link shop-button color">View Details</a>
                                                <a href="#" class="compare-link color title30"><i class="icon ion-ios-checkmark-outline"></i></a>
                                            </div>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width:100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($category->products->chunk(2) as $chunk)
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        @foreach ($chunk as $product)
                                            <div class="item-product text-center style1">
                                                <div class="product-thumb">
                                                    <a href="#" class="product-thumb-link zoom-thumb"><img src="{{$product->getFirstMediaUrl('product-image')}}" alt="product-image"></a>
                                                    <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                                    {{-- <div class="product-label">
                                                        <span class="sale-label">Sale</span>
                                                    </div> --}}
                                                </div>
                                                <div class="product-info">
                                                    <a href="#" class="cat-parent color">{{$product->category->name}}</a>
                                                    <h3 class="title16 font-bold product-title"><a href="#">{{$product->name}}</a></h3>
                                                    <div class="product-price">
                                                    <ins class="font-bold"><span> {{money($product->price)}}</span></ins>
                                                    </div>
                                                    <div class="product-extra-link style1">
                                                        <a href="#" class="wishlist-link color title30"><i class="icon ion-android-favorite-outline"></i></a>
                                                        <a href="#" class="addcart-link shop-button color">Add to cart</a>
                                                        <a href="#" class="compare-link color title30"><i class="icon ion-ios-checkmark-outline"></i></a>
                                                    </div>
                                                    <div class="product-rate">
                                                        <div class="product-rating" style="width:100%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- End Item -->
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
