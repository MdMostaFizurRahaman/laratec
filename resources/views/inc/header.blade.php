<header id="header">
    <div class="top-header bg-color2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <p class="desc white hot-line"><span class="smoke">Call Hotline:</span> {{getSettings()->hotline ?? "01711 112 222"}}</p>
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
                        <h1 class="hidden">Bio-Access Tech</h1>
                        <a href="{{url('/')}}"><img src="{{logo()}}" alt="" width="180px" height="60px"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-3">
                    <nav class="main-nav main-nav1 pull-right">
                        <ul class="list-inline-block">
                            <li class="menu-item-has-children">
                                <a href="{{url('/')}}"><i class="icon ion-ios-home"></i>Home</a>
                            </li>
                            <li><a href="{{route('contact-us')}}"><i class="icon ion-at"></i>Contact Us</a></li>
                            <li><a href="{{route('about-us')}}"><i class="icon ion-help"></i>About Us</a></li>
                            <li class="menu-item-has-children">
                                <a href="{{route('shop')}}"><i class="icon ion-bag"></i>Shop</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('blog')}}"><i class="icon ion-compose"></i>Blog Page</a>
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
