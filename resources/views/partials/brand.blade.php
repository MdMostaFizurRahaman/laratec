<div class="container">
        <!-- End Banner -->
        <div class="brand-box">
            <h2 class="title30 font-bold title-line-after">Our Valueable Customers</h2>
            <div class="brand-slider">
                <div class="wrap-item group-navi" data-pagination="false" data-autoplay="true" data-navigation="true" data-itemscustom="[[0,2],[480,3],[768,4],[990,5]]">
                    @foreach ($customers as $customer)
                        <div class="item-brand text-center">
                            <a title="{{$customer->name}}" href="#" class="wobble-horizontal"><img src="{{$customer->getFirstMediaUrl('general')}}" alt="" /></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Brand -->

</div>
