@extends('layouts.app')

@section('content')
<section id="content">
    <div class="banner-slider bg-slider banner-slider1">
        <div class="wrap-item" data-navigation="true" data-transition="fade" data-autoplay="true" data-itemscustom="[[0,1]]">
            <div class="item-slider item-slider1">
                <div class="banner-thumb"><a href="#"><img src="{{asset('theme')}}/images/home/home1/slide1.jpg" alt="" /></a></div>
                <div class="banner-info animated" data-animated="fadeInLeft">
                    <div class="container">
                        <div class="banner-info-inner">
                            <h2 class="title30 color">Audio Home</h2>	
                            <h2 class="title30">Video & Air Quality Monitor New Collection</h2>
                            <a href="#" class="shop-button color">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-slider item-slider1">
                <div class="banner-thumb"><a href="#"><img src="{{asset('theme')}}/images/home/home1/slide2.jpg" alt="" /></a></div>
                <div class="banner-info animated" data-animated="bounceInLeft">
                    <div class="container">
                        <div class="banner-info-inner">
                            <h2 class="title30 color">Steel HR</h2>	
                            <h2 class="title30">Watch your heart Style your health.</h2>
                            <a href="#" class="shop-button color">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-slider item-slider1">
                <div class="banner-thumb"><a href="#"><img src="{{asset('theme')}}/images/home/home1/slide3.jpg" alt="" /></a></div>
                <div class="banner-info animated" data-animated="zoomInLeft">
                    <div class="container">
                        <div class="banner-info-inner">
                            <h2 class="title30 color">Audio Home</h2>	
                            <h2 class="title30">Video & Air Quality Monitor New Collection</h2>
                            <a href="#" class="shop-button color">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Slider -->
    <div class="container">
        <div class="product-trending-box">
            <h2 class="title30 title-line-after font-bold">Trending</h2>
            <div class="product-trend-slider">
                <div class="wrap-item group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,4]]">
                    <div class="item-product text-center style1">
                        <div class="product-thumb">
                            <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-01.png" alt="" /></a>
                            <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                        </div>
                        <div class="product-info">
                            <a href="#" class="cat-parent color">Mobile</a>
                            <h3 class="title16 font-bold product-title"><a href="#">IPhone7 plus ID747</a></h3>
                            <div class="product-price">
                                <del class="silver"><span>$490.00 </span></del>
                                <ins class="font-bold"><span>$245.00</span></ins>
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
                    <div class="item-product text-center style1">
                        <div class="product-thumb">
                            <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-04.png" alt="" /></a>
                            <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                            <div class="product-label">
                                <span class="sale-label">Sale</span>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="cat-parent color">Mobile</a>
                            <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                            <div class="product-price">
                                <del class="silver"><span>$490.00 </span></del>
                                <ins class="font-bold"><span>$245.00</span></ins>
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
                    <div class="item-product text-center style1">
                        <div class="product-thumb">
                            <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-watch-09.png" alt="" /></a>
                            <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                        </div>
                        <div class="product-info">
                            <a href="#" class="cat-parent color">Watches</a>
                            <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                            <div class="product-price">
                                <del class="silver"><span>$490.00 </span></del>
                                <ins class="font-bold"><span>$245.00</span></ins>
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
                    <div class="item-product text-center style1">
                        <div class="product-thumb">
                            <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-01.png" alt="" /></a>
                            <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                            <div class="product-label">
                                <span class="sale-label">Sale</span>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="cat-parent color">Mobile</a>
                            <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                            <div class="product-price">
                                <del class="silver"><span>$490.00 </span></del>
                                <ins class="font-bold"><span>$245.00</span></ins>
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
                    <div class="item-product text-center style1">
                        <div class="product-thumb">
                            <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-02.png" alt="" /></a>
                            <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                        </div>
                        <div class="product-info">
                            <a href="#" class="cat-parent color">Watches</a>
                            <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                            <div class="product-price">
                                <del class="silver"><span>$490.00 </span></del>
                                <ins class="font-bold"><span>$245.00</span></ins>
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
                    <div class="item-product text-center style1">
                        <div class="product-thumb">
                            <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-03.png" alt="" /></a>
                            <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                            <div class="product-label">
                                <span class="sale-label">Sale</span>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="cat-parent color">Mobile</a>
                            <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                            <div class="product-price">
                                <del class="silver"><span>$490.00 </span></del>
                                <ins class="font-bold"><span>$245.00</span></ins>
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
                </div>
            </div>
        </div>
        <!-- End Trending Box -->
        <div class="list-intro-box box-hover-active">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item-hover-active item-intro-box wow bounceInRight" data-wow-delay="0s"><a href="#" class="color text-uppercase">STUDENTS! WIN A DREAM HOLIDAY<br> + GET 10% OFF 24/7</a></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item-hover-active item-intro-box wow bounceInRight active item-active" data-wow-delay="0.4s"><a href="#" class="color text-uppercase">UNLIMITED NEXT-DAY DELIVERY TO THE UK<br> ONLY £9.95 A YEAR</a></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item-hover-active item-intro-box wow bounceInRight" data-wow-delay="0.8s"><a href="#" class="color text-uppercase">FREE DELIVERY WORLDWIDE*<br> *MORE INFO HERE</a></div>
                </div>
            </div>
        </div>
        <!-- End Box Intro -->
    </div>
    <div class="parallax featured-banner-product" data-image="{{asset('theme')}}/images/home/home1/banner1.jpg">
        <div class="banner-info">
            <div class="container">
                <div class="featured-banner-info wow zoomIn">
                    <h3 class="title30 title-line-after">Featured</h3>
                    <h2 class="title60 color">Product</h2>
                    <h3 class="title30 silver font-light">The latest technology</h3>
                    <h3 class="title30 font-light color">$890.00</h3>
                    <div class="banner-button">
                        <a href="#" class="shop-button color">Shop Now</a>
                        <a href="#" class="shop-button bg-color2">More Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <div class="container">
        <div class="category-product-box">
            <h3 class="title30 font-bold title-line-after">Mobile</h3>
            <div class="category-product-slider">
                <div class="wrap-item group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1]]">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/home/home1/cat2.jpg" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">IPhone7 plus ID747</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-07.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-09.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-08.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-10.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/home/home1/cat1.jpg" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">IPhone7 plus ID747</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-03.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-04.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-05.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-smartphone-06.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Mobile</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                </div>
            </div>
        </div>
    </div>
    <div class="deal-of-day text-center bg-color2 white">
        <h2 class="title30 font-bold">Deal Of the Day</h2>
        <div class="time-countdown deal-countdown hidden-canvas" data-date="12/12/2018" data-text='["Days","Hour","Mins","Secs"]'></div>
        <a href="#" class="shop-button white">Daily Deals</a>
        <div class="deal-of-thumb wow flipInX">
            <img src="{{asset('theme')}}/images/home/home1/phone.png" alt="" />
        </div> 
    </div>
    <!-- End Deal -->
    <div class="container">
        <div class="category-product-box">
            <h3 class="title30 font-bold title-line-after">Laptop</h3>
            <div class="category-product-slider">
                <div class="wrap-item group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1]]">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/home/home1/cat1.jpg" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">IPhone7 plus ID747</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-07.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-05.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-02.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-04.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/home/home1/cat2.jpg" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">IPhone7 plus ID747</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-03.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-06.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-08.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-laptop-09.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Laptop</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                </div>
            </div>
        </div>
        <div class="category-product-box watch-cat">
            <h3 class="title30 font-bold title-line-after">Watches</h3>
            <div class="category-product-slider">
                <div class="wrap-item group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1]]">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/home/home1/cat3.jpg" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">IPhone7 plus ID747</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-watch-03.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-watch-05.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-watch-04.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-watch-06.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/home/home1/cat3.jpg" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">IPhone7 plus ID747</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-watch-07.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-watch-08.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Lenovo smartphone vibe k6 note hero</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-watch-09.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                        <div class="product-label">
                                            <span class="sale-label">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                                <div class="item-product text-center style1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="{{asset('theme')}}/images/product/fb-tech-watch-01.png" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="cat-parent color">Watches</a>
                                        <h3 class="title16 font-bold product-title"><a href="#">Ella angle2 1024x1024</a></h3>
                                        <div class="product-price">
                                            <del class="silver"><span>$490.00 </span></del>
                                            <ins class="font-bold"><span>$245.00</span></ins>
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
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                </div>
            </div>
        </div>
    </div>
    <div class="client-box">
        <div class="container">
            <div class="inner-client-box">
                <div class="client-slider">
                    <div class="wrap-item" data-itemscustom="[[0,1]]" data-autoplay="true">
                        <div class="item-client">
                            <ul class="list-none info-client">
                                <li>
                                    <h3 class="title18 font-bold"><a href="#" class="white">Fanbong  FB-Tech</a></h3>
                                </li>
                                <li>
                                    <span class="white">Aug.28.2017</span>
                                </li>
                            </ul>
                            <p class="desc white title18 font-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum ac lacus non blandit. Morbi egestas velit velit, nec tincidunt arcu blandit eu. Pellentesque gravida sem tempus accumsan molestie. Fusce sed blandit eros. Nam dictum elit mauris, vel aliquam diam ornare eget. Pellentesque ac pharetra mi...” </p>
                        </div>
                        <div class="item-client">
                            <ul class="list-none info-client">
                                <li>
                                    <h3 class="title18 font-bold"><a href="#" class="white">Thanhiep  FB-Tech</a></h3>
                                </li>
                                <li>
                                    <span class="white">Aug.28.2017</span>
                                </li>
                            </ul>
                            <p class="desc white title18 font-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum ac lacus non blandit. Morbi egestas velit velit, nec tincidunt arcu blandit eu. Pellentesque gravida sem tempus accumsan molestie. Fusce sed blandit eros. Nam dictum elit mauris, vel aliquam diam ornare eget. Pellentesque ac pharetra mi...” </p>
                        </div>
                        <div class="item-client">
                            <ul class="list-none info-client">
                                <li>
                                    <h3 class="title18 font-bold"><a href="#" class="white">Maibach  FB-Tech</a></h3>
                                </li>
                                <li>
                                    <span class="white">Aug.28.2017</span>
                                </li>
                            </ul>
                            <p class="desc white title18 font-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum ac lacus non blandit. Morbi egestas velit velit, nec tincidunt arcu blandit eu. Pellentesque gravida sem tempus accumsan molestie. Fusce sed blandit eros. Nam dictum elit mauris, vel aliquam diam ornare eget. Pellentesque ac pharetra mi...” </p>
                        </div>
                    </div>
                </div>
                <div class="client-box-thumb wow slideInRight"><img src="{{asset('theme')}}/images/home/home1/client.png" alt="" /></div>
            </div>
        </div>
    </div>
    <!-- End Client Box -->
    <div class="container">
        <div class="latest-news">
            <div class="latest-news-intro text-center">
                <h2 class="title30 font-bold">Latest News from the Blog</h2>
                <a href="#" class="shop-button color">View All <i class="icon ion-android-arrow-forward"></i></a>
            </div>	
            <div class="list-latest-post">
                <div class="wrap-item" data-pagination="false" data-itemscustom="[[0,1],[560,2],[990,3]]">
                    <div class="item-post drop-shadow">
                        <div class="banner-adv overlay-image zoom-image">
                            <a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/blog/thumb/fb-tech-blog-07.jpg" alt="" /></a>
                        </div>
                        <div class="post-info">
                            <h3 class="title18 font-bold"><a href="#">Easy & Intuitive Heart Rate </a></h3>
                            <span class="color post-date"><i class="icon ion-calendar"></i>Aug.29.2017</span>
                            <p class="desc">Steel HR offers automatic heart rate tracking throughout the day and night to help you monitor health and optimize performance.</p>
                            <a href="#" class="shop-button color">Shop Now</a>
                        </div>
                    </div>
                    <div class="item-post drop-shadow">
                        <div class="banner-adv overlay-image zoom-image">
                            <a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/blog/thumb/fb-tech-blog-03.jpeg" alt="" /></a>
                        </div>
                        <div class="post-info">
                            <h3 class="title18 font-bold"><a href="#">Automatic Activity & Sleep Tracking</a></h3>
                            <span class="color post-date"><i class="icon ion-calendar"></i>Aug.29.2017</span>
                            <p class="desc">With automatic recognition of steps, run, swim, distance and calories burned, a quick glance at the watch's activity dial lets... </p>
                            <a href="#" class="shop-button color">Shop Now</a>
                        </div>
                    </div>
                    <div class="item-post drop-shadow">
                        <div class="banner-adv overlay-image zoom-image">
                            <a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/blog/thumb/fb-tech-watch-06.jpg" alt="" /></a>
                        </div>
                        <div class="post-info">
                            <h3 class="title18 font-bold"><a href="#">Personalized Smartphone </a></h3>
                            <span class="color post-date"><i class="icon ion-calendar"></i>Aug.29.2017</span>
                            <p class="desc">With automatic recognition of steps, run, swim, distance and calories burned, a quick glance at the watch's activity dial lets... </p>
                            <a href="#" class="shop-button color">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Latest News -->
        <div class="list-banner-body">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="item-banner-body white" style="background:#728aa4">
                        <h2 class="title48 font-light">Body</h2>
                        <p class="desc white">Full Body Composition Wi-Fi Scale</p>
                        <h3 class="title30">$79.98</h3>
                        <a href="#" class="shop-button color">Shop Now</a>
                        <img class="wow zoomInRight" src="{{asset('theme')}}/images/home/home1/body1.png" alt="" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="item-banner-body white" style="background:#83a6c0">
                        <h2 class="title48 font-light">Body Cardio</h2>
                        <p class="desc white">Heart Health &amp; Body Composition </p>
                        <h3 class="title30">$215.00</h3>
                        <a href="#" class="shop-button color">Shop Now</a>
                        <img class="wow zoomInRight" src="{{asset('theme')}}/images/home/home1/body2.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->
        <div class="brand-box">
            <h2 class="title30 font-bold title-line-after">Popular Brands</h2>
            <div class="brand-slider">
                <div class="wrap-item group-navi" data-pagination="false" data-autoplay="true" data-navigation="true" data-itemscustom="[[0,2],[480,3],[768,4],[990,5]]">
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand1.png" alt="" /></a>
                    </div>
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand2.png" alt="" /></a>
                    </div>
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand3.png" alt="" /></a>
                    </div>
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand4.png" alt="" /></a>
                    </div>
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand5.png" alt="" /></a>
                    </div>
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand1.png" alt="" /></a>
                    </div>
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand2.png" alt="" /></a>
                    </div>
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand3.png" alt="" /></a>
                    </div>
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand4.png" alt="" /></a>
                    </div>
                    <div class="item-brand text-center">
                        <a href="#" class="wobble-horizontal"><img src="{{asset('theme')}}/images/brand/homepage_brand5.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand -->
    </div>
    
</section>
@endsection