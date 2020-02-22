@extends('layouts.app')

@section('title')
    About Us
@endsection

@section('content')
<section id="content">
    <div class="container">
        <div class="banner-slider bg-slider banner-slider-shop">
            <div class="wrap-item owl-carousel owl-theme" data-pagination="false" data-itemscustom="[[0,1]]" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1528px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item active" style="width: 764px;"><div class="item-slider item-slider-shop" style="background-image: url('{{asset('theme')}}/images/shop/banner2.jpg');">
                <div class="banner-thumb"><a href="#"><img src="{{!empty($aboutUs) ? $aboutUs->getFirstMediaUrl('general') : asset('theme//images/shop/banner2.jpg')}}" alt=""></a></div>
                    <div class="banner-info animated zoomIn" data-animated="zoomIn">
                        <div class="container">
                            <div class="banner-info-inner text-center">
                                {{-- <h3 class="title14 color title-underline">13-inch Chassis</h3>	 --}}
                                <h2 class="title30 color">{{!empty($aboutUs) ? $aboutUs->title : null}}</h2>
                                <p class="desc white" style="font-size:20px">{{!empty($aboutUs) ? $aboutUs->subtitle : null}}</p>
                            </div>
                        </div>
                    </div>
                </div></div></div></div>
            </div>
        </div>
        <!-- End Banner Slider -->
        <div class="bread-crumbs">

        </div>
        <!-- End Bread Crumb -->
        <div class="content-pages">
            <div class="content-about">
                <h2 class="title30 text-uppercase font-bold">about us</h2>
                <p class="desc">{{!empty($aboutUs) ? $aboutUs->description : null}}</p>

                <div class="about-client" style="margin-top:20px">
                    <h2 class="title18 rale-font text-uppercase font-bold">What people are saying</h2>
                    <div class="about-client-slider">
                        <div class="wrap-item" data-autoplay="true" data-pagination="false" data-itemscustom="[[0,1],[560,2],[990,3]]">
                            <div class="item-about-client">
                                <div class="client-thumb"><a href="#"><img src="{{asset('theme')}}/images/page/av1.jpg" alt="" /></a></div>
                                <div class="client-info">
                                    <p class="desc">Lorem enim et luctus hendrelibero mole stie ante, ut fringilla purus eros quisent ipsum. Aliquam bidum. Thank you!</p>
                                    <h3 class="title14"><a href="#" class="color">Vincent Vanilla</a></h3>
                                    <span class="navi silver">happy customer</span>
                                </div>
                            </div>
                            <div class="item-about-client">
                                <div class="client-thumb"><a href="#"><img src="{{asset('theme')}}/images/page/av2.jpg" alt="" /></a></div>
                                <div class="client-info">
                                    <p class="desc">Lorem enim et luctus hendrelibero mole stie ante, ut fringilla purus eros quisent ipsum. Aliquam bidum. Thank you!</p>
                                    <h3 class="title14"><a href="#" class="color">Gregor Red</a></h3>
                                    <span class="navi silver">loyal customer</span>
                                </div>
                            </div>
                            <div class="item-about-client">
                                <div class="client-thumb"><a href="#"><img src="{{asset('theme')}}/images/page/av3.jpg" alt="" /></a></div>
                                <div class="client-info">
                                    <p class="desc">Lorem enim et luctus hendrelibero mole stie ante, ut fringilla purus eros quisent ipsum. Aliquam bidum. Thank you!</p>
                                    <h3 class="title14"><a href="#" class="color">Alexander Green</a></h3>
                                    <span class="navi silver">happy customer</span>
                                </div>
                            </div>
                            <div class="item-about-client">
                                <div class="client-thumb"><a href="#"><img src="{{asset('theme')}}/images/page/av4.jpg" alt="" /></a></div>
                                <div class="client-info">
                                    <p class="desc">Lorem enim et luctus hendrelibero mole stie ante, ut fringilla purus eros quisent ipsum. Aliquam bidum. Thank you!</p>
                                    <h3 class="title14"><a href="#" class="color">Vincent Vanilla</a></h3>
                                    <span class="navi silver">happy customer</span>
                                </div>
                            </div>
                            <div class="item-about-client">
                                <div class="client-thumb"><a href="#"><img src="{{asset('theme')}}/images/page/av5.jpg" alt="" /></a></div>
                                <div class="client-info">
                                    <p class="desc">Lorem enim et luctus hendrelibero mole stie ante, ut fringilla purus eros quisent ipsum. Aliquam bidum. Thank you!</p>
                                    <h3 class="title14"><a href="#" class="color">Gregor Red</a></h3>
                                    <span class="navi silver">loyal customer</span>
                                </div>
                            </div>
                            <div class="item-about-client">
                                <div class="client-thumb"><a href="#"><img src="{{asset('theme')}}/images/page/av6.jpg" alt="" /></a></div>
                                <div class="client-info">
                                    <p class="desc">Lorem enim et luctus hendrelibero mole stie ante, ut fringilla purus eros quisent ipsum. Aliquam bidum. Thank you!</p>
                                    <h3 class="title14"><a href="#" class="color">Alexander Green</a></h3>
                                    <span class="navi silver">happy customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
