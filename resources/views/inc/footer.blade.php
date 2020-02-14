<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="logo-footer inline-block"><a href="#"><img src="{{asset('theme')}}/images/home/home1/logo-footer.png" alt="" /></a></div>
            <ul class="menu-footer list-inline-block inline-block">
                <li><a href="#" class="white">Home </a></li>
                <li><a href="#" class="white">About {{getSettings()->companyName ?? config('app.name', 'Laravel')}}</a></li>
                <li><a href="#" class="white">Contact Us</a></li>
                <li><a href="#" class="white">Blog</a></li>
                <li><a href="#" class="white">Customer Service </a></li>
                <li><a href="#" class="white">Q&A</a></li>
                <li><a href="#" class="white">Affiliate Program</a></li>
                <li><a href="#" class="white">Reseller</a></li>
            </ul>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="footer-main">
        <div class="container">
            <div class="list-footer-box">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-box">
                            <h2 class="title-footer title18 white">Contact Me</h2>
                            <div class="contact-footer-box">
                                <p class="desc smoke"><i class="white icon ion-ios-location"></i>{{getSettings()->address ?? "400 Fashion Lane, Ste. 360 Texac, CA 92780"}}</p>
                                <p class="desc smoke"><i class="white icon ion-android-mail"></i><a href="mailto:mailsupport@gmail.com" class="smoke">{{getSettings()->email ?? "400 Fashion Lane, Ste. 360 Texac, CA 92780"}}</a></p>
                                <p class="desc smoke"><i class="white icon ion-android-call"></i>{{getSettings()->telephone ?? "400 Fashion Lane, Ste. 360 Texac, CA 92780"}}</p>
                            </div>
                        </div>
                        <div class="footer-box">
                            <h2 class="title-footer title18 white">Newsletter</h2>
                            <form class="newsletter-footer">
                                <input type="text" />
                                <input class="shop-button bg-color" type="submit" value="Subscribe" />
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="footer-box">
                                    <h2 class="title-footer title18 white">Information</h2>
                                    <ul class="list-none footer-menu-box">
                                        <li><a href="#" class="smoke">About</a></li>
                                        <li><a href="#" class="smoke">Contact Us</a></li>
                                        <li><a href="#" class="smoke">Blog</a></li>
                                        <li><a href="#" class="smoke">Testimonials</a></li>
                                        <li><a href="#" class="smoke">Affiliate Program</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="footer-box">
                                    <h2 class="title-footer title18 white">Help & Support</h2>
                                    <ul class="list-none footer-menu-box">
                                        <li><a href="#" class="smoke">Help Center</a></li>
                                        <li><a href="#" class="smoke">Free Sample Templates</a></li>
                                        <li><a href="#" class="smoke">Refund Policy</a></li>
                                        <li><a href="#" class="smoke">Report Spam</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-box">
                            <div class="payment-method">
                                <h2 class="title-footer title18 white">Payment Method</h2>
                                <a href="#" class="push"><img src="{{asset('theme')}}/images/icon/pay1.png" alt="" /></a>
                                <a href="#" class="push"><img src="{{asset('theme')}}/images/icon/pay2.png" alt="" /></a>
                                <a href="#" class="push"><img src="{{asset('theme')}}/images/icon/pay3.png" alt="" /></a>
                                <a href="#" class="push"><img src="{{asset('theme')}}/images/icon/pay4.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-box">
                            <h2 class="title-footer title18 white">My Instagram Feed</h2>
                            <ul class="list-instagram list-none clearfix">
                                <li class="pull-left banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/home/home1/in1.jpg" alt="" /></a></li>
                                <li class="pull-left banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/home/home1/in2.jpg" alt="" /></a></li>
                                <li class="pull-left banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/home/home1/in3.jpg" alt="" /></a></li>
                                <li class="pull-left banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/home/home1/in4.jpg" alt="" /></a></li>
                                <li class="pull-left banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/home/home1/in5.jpg" alt="" /></a></li>
                                <li class="pull-left banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/home/home1/in6.jpg" alt="" /></a></li>
                                <li class="pull-left banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/home/home1/in7.jpg" alt="" /></a></li>
                                <li class="pull-left banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/home/home1/in8.jpg" alt="" /></a></li>
                                <li class="pull-left banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="{{asset('theme')}}/images/home/home1/in9.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-copyright">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p class="desc white copyright">{{getSettings()->footerText ?? "@2019 Ahmed Shakil all rights reserved."}}</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p class="desc white design-by text-right">Developed by: <a href="http://ahmedshakil.com" class="smoke">Ahmed Shail</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
