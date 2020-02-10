
@php
$carousels = App\Models\Carousel::all();
@endphp
<div class="banner-slider bg-slider banner-slider1">
    <div class="wrap-item" data-navigation="true" data-transition="fade" data-autoplay="true" data-itemscustom="[[0,1]]">
        {{-- Carousel items --}}
        @if (!empty($carousels))

        @foreach ($carousels as $carousel)

        <div class="item-slider item-slider1">
            <div class="banner-thumb">
                <a href="{{$carousel->getFirstMediaUrl('carousels')}}">
                    <img src="{{asset('public').$carousel->getFirstMediaUrl('carousels')}}" alt="">
                    {{-- {{$carousel->getFirstMedia('carousels')}} --}}
                </a>
            </div>
            <div class="banner-info animated" data-animated="fadeInLeft">
                <div class="container">
                    <div class="banner-info-inner" style="color: white;">
                        <h2 class="title30 color">{{$carousel->title}}</h2>
                        <h2 class="title30">{{$carousel->subtitle}}</h2>
                        <a href="{{$carousel->link}}" class="shop-button color">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="item-slider item-slider1">
            <div class="banner-thumb">
                <a href="{{asset('theme')}}/images/brand/homepage_brand1.png">
                    <img src="{{asset('theme')}}/images/brand/homepage_brand1.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="banner-info animated" data-animated="fadeInLeft">
                <div class="container">
                    <div class="banner-info-inner" style="color: white;">
                        <h2 class="title30 color">Title</h2>
                        <h2 class="title30">Subtitle</h2>
                        <a href="#" class="shop-button color">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        {{-- End Carousel items --}}

    </div>
</div>
<!-- End Banner Slider -->
