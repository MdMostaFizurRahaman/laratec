@extends('layouts.app')

@section('title')
    Shop
@endsection

@section('content')
<section id="content">

    <div class="container">
        <div class="bread-crumbs">
        </div>
        <!-- End Bread Crumb -->
        <div class="content-pages">
            <div class="shop-title">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-bold title30 text-uppercase title-line-after pull-left">SHOP</h2>
                    </div>
                </div>
            </div>
            <div class="product-gridview">
                <div class="row">
                    @foreach ($paginateProducts as $product)
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="item-product text-center style1">
                                <div class="product-thumb">
                                    <a href="#" class="product-thumb-link zoom-thumb"><img src="{{$product->getFirstMediaUrl('product-image')}}" alt="product-image"></a>
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
                                        <a href="#" class="addcart-link shop-button color">View Details</a>
                                        <a href="#" class="compare-link color title30"><i class="icon ion-ios-checkmark-outline"></i></a>
                                    </div>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pagi-nav text-center">
                {{$paginateProducts->links()}}
            </div>
        </div>
        <!-- End Content Pages -->
    </div>
</section>
@endsection
