@php
    $company = App\Models\Settings::first();
@endphp
<header id="header">
    <div class="top-header bg-color2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <p class="desc white hot-line"><span class="smoke">Call Hotline:</span> {{$company->hotline}}</p>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <ul class="search-cart-top list-inline-block pull-right">
                        <li>
                            <form class="search-hover">
                                <input type="text" name="s"/>
                                <input type="hidden"  />
                                <span class="smoke"><i class="title18 white icon ion-ios-search-strong"></i>Search</span>
                            </form>
                        </li>
                        <li>
                            <a href="#" class="sign-up smoke"><span class="white title18"><i class="icon ion-android-person"></i></span>Sign Up</a>
                        </li>
                        <li>
                            <div class="mini-cart-box mini-cart1 dropdown-box">
                                <a class="mini-cart-link" href="cart.html">
                                    <span class="mini-cart-icon title18 white"><i class="icon ion-android-cart"></i></span>
                                    <sup class="mini-cart-number white title10">2</sup>
                                    <span class="mini-cart-label smoke">Cart</span>
                                </a>
                                <div class="mini-cart-content dropdown-list text-left">
                                    <h2 class="title18 font-bold rale-font">(2) ITEMS IN MY CART</h2>
                                    <div class="list-mini-cart-item">
                                        <div class="product-mini-cart table">
                                            <div class="product-thumb">
                                                <a href="detail.html" class="product-thumb-link"><img alt="" src="{{asset('theme')}}/images/product/fb-tech-watch-01.png"></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-title title16 font-bold"><a href="#">Ella angle2</a></h3>
                                                <div class="product-price">
                                                    <ins class="title14 font-bold"><span>$40.00</span></ins>
                                                </div>
                                                <div class="mini-cart-qty">
                                                    <label>Qty:</label>
                                                    <span>1</span>
                                                </div>
                                            </div>
                                            <div class="product-delete text-right">
                                                <a href="#" class="remove-product"><i class="icon ion-trash-a"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-mini-cart table">
                                            <div class="product-thumb">
                                                <a href="detail.html" class="product-thumb-link"><img alt="" src="{{asset('theme')}}/images/product/fb-tech-watch-02.png"></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-title title16 font-bold"><a href="#">Ella angle2</a></h3>
                                                <div class="product-price">
                                                    <ins class="title14 font-bold"><span>$40.00</span></ins>
                                                </div>
                                                <div class="mini-cart-qty">
                                                    <label>Qty:</label>
                                                    <span>1</span>
                                                </div>
                                            </div>
                                            <div class="product-delete text-right">
                                                <a href="#" class="remove-product"><i class="icon ion-trash-a"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart-total text-uppercase rale-font title18 clearfix">
                                        <span class="pull-left">TOTAL</span>
                                        <strong class="pull-right color">$80.00</strong>
                                    </div>
                                    <div class="mini-cart-button">
                                        <a class="mini-cart-view shop-button color" href="#">View my cart </a>
                                        <a class="mini-cart-checkout shop-button color" href="#">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header -->
    <div class="header-nav bg-white header-ontop">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-9">
                    <div class="logo logo1">
                        <h1 class="hidden">FB-Tech</h1>
                        <a href="#"><img src="{{$company->getFirstMediaUrl('logo')}}" width='100' height="60" style="border-radius: 5px;" alt=""></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-3">
                    <nav class="main-nav main-nav1 pull-right">
                        <ul class="list-inline-block">
                            <li class="menu-item-has-children">
                                <a href="{{url('/')}}"><i class="icon ion-ios-home"></i>Home</a>
                            </li>
                            <li><a href="#"><i class="icon ion-at"></i>Contact Us</a></li>
                            <li><a href="#"><i class="icon ion-help"></i>About Us</a></li>
                            <li class="menu-item-has-children">
                                <a href="#"><i class="icon ion-bag"></i>Shop</a>
                                <ul class="list-none sub-menu">
                                    <li><a href="listview.html">List View</a></li>
                                    <li><a href="list-with-sidebar.html">List With Sidebar</a></li>
                                    <li><a href="gridview.html">Grid View</a></li>
                                    <li><a href="grid-with-sidebar.html">Grid With Sidebar</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="detail.html">Product Detail</a>
                                        <ul class="list-none sub-menu">
                                            <li><a href="detail.html">Detail Full Width</a></li>
                                            <li><a href="detail-with-sidebar.html">Detail With Sidebar</a></li>
                                            <li><a href="detail-service-right.html">Detail With Service</a></li>
                                            <li><a href="detail-extra-link.html">Detail Extra Link</a></li>
                                            <li><a href="detail-group.html">Detail Group</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="cart.html">Product Cart</a></li>
                                    <li><a href="checkout.html">Product Check Out</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#"><i class="icon ion-compose"></i>Blog Page</a>
                                <ul class="list-none sub-menu">
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a href="#" class="toggle-mobile-menu"><span></span></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Nav -->
</header>
