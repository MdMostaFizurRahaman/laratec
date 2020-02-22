@extends('layouts.app')

@section('title')
    Product Details
@endsection

@section('content')
<section id="content">

    <div class="container">
        <div class="bread-crumbs">
            <a href="{{url('/')}}"><i class="icon ion-ios-home"></i></a>
            <a href="{{route('shop')}}">Shop</a>
            <span>{{Str::title(Str::slug($product->name))}}</span>
        </div>
        <!-- End Bread Crumb -->
        <div class="content-pages">
            <div class="title-product-detail">
                <h2 class="title30 font-bold">{{$product->name}}</h2>
            </div>
            <!-- End Title Product -->
            <div class="detail-product">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="detail-gallery">
                            <div class="mid">
                                <img src="{{$product->getFirstMediaUrl('product-image')}}" alt="product-image"/>
                            </div>
                        </div>
                        <!-- End Gallery -->
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="detail-info">
                            <div class="product-price">
                                <ins class="font-bold"><span>{{money($product->price)}}</span></ins>
                            </div>
                            <div class="product-rate">
                                <div class="product-rating" style="width:100%"></div>
                            </div>
                            <p class="desc product-desc">{{$product->description}}</p>
                            <ul class="list-inline-block detail-qty-cart">
                                <li>
                                    <div class="detail-qty info-qty border">
                                        <label class="navi">Qty</label>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-down smoke"><i class="icon ion-ios-minus-empty"></i></a>
                                        <a href="#" class="qty-up smoke"><i class="icon ion-ios-plus-empty"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <a class="addcart-link shop-button bg-color" href="#"><i class="icon ion-android-cart"></i>Add to Cart</a>
                                </li>
                            </ul>
                            <ul class="detail-wishlist-compare list-inline-block">
                                <li>
                                    <a href="#" class="wishlist-link color"><i class="title30 icon ion-android-favorite-outline"></i><span>Add to Wishlist</span></a>
                                </li>
                                <li>
                                    <a href="#" class="compare-link color"><i class="title30 icon ion-ios-checkmark-outline"></i><span>Add to Compare</span></a>
                                </li>
                            </ul>
                            <div class="detail-social-button">
                                <img src="images/shop/detail.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Detail Product -->
            <div class="detail-tabs">
                <ul class="title-best-tab list-inline-block">
                    <li class="active"><a href="#tab1" data-toggle="tab" class="shop-button">Features</a></li>
                    <li><a href="#tab2" data-toggle="tab" class="shop-button">Configuration</a></li>
                    <li><a href="#tab3" data-toggle="tab" class="shop-button">Specification</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane active">
                        <div class="tab-desc">
                            {{$product->features}}
                        </div>
                    </div>
                    <div id="tab2"  class="tab-pane">
                            {{$product->configuration}}
                    </div>
                    <div id="tab3" class="tab-pane">
                            {{$product->specification}}
                    </div>
                </div>
            </div>
            <!-- End Detail Tab -->
            <div class="product-related">
                <h2 class="title24 font-bold"><span>Related Products</span></h2>
                <div class="product-trend-slider">
                    <div class="wrap-item group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,4]]">
                        @foreach ($product->relatedProducts as $product)
                            <div class="item-product text-center style1">
                                <div class="product-thumb">
                                    <a href="#" class="product-thumb-link zoom-thumb"><img src="{{$product->getFirstMediaUrl('product-image')}}" alt="" /></a>
                                    <a href="" class="quickview-link fancybox fancybox.iframe">Quick view</a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="cat-parent color">{{$product->category->name}}</a>
                                    <h3 class="title16 font-bold product-title"><a href="#">{{$product->name}}</a></h3>
                                    <div class="product-price">
                                        <ins class="font-bold"><span>{{money($product->price)}}</span></ins>
                                    </div>
                                    <div class="product-extra-link style1">
                                        <a href="#" class="wishlist-link color title30"><i class="icon ion-android-favorite-outline"></i></a>
                                        <a href="{{route('shop.show', $product->id)}}" class="addcart-link shop-button color">View Details</a>
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
            <!-- End Product Related -->
        </div>
        <!-- End Content Pages -->
    </div>
</section>
@endsection
