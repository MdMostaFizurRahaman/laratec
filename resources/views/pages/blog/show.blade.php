@extends('layouts.app')

@section('title')
    Blog
@endsection

@section('content')
<section id="content">

    <div class="container">
        <div class="bread-crumbs">
            <a href="{{url('/')}}"><i class="icon ion-ios-home"></i></a>
            <a href="{{route('blog')}}">Blog</a>
            <span>{{Str::title(Str::slug($post->title, '-'))}}</span>
        </div>
        <!-- End Bread Crumb -->
        <div class="content-pages">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="content-blog-detail">
                        <div class="detail-blog-info">
                            <h2 class="title30 font-bold text-uppercase ">{{$post->title}}</h2>
                            <p class="desc title18  silver">{{$post->subtitle}}</p>
                            <ul class="list-none total-post-info">
                                <li>
                                    <div class="post-date-author title14">
                                        <span class="color"><i class="icon ion-calendar"></i>Aug.29.2017</span>
                                        <a href="#" class="color"><i class="icon ion-compose"></i>Admin</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="banner-adv zoom-image overlay-image">
                            <a href="#" class="adv-thumb-link"><img src="{{$post->getFirstMediaUrl('posts')}}" alt=""></a>
                        </div>
                        <p class="desc silver ">{{$post->description}}</p>
                        <div class="reply-comment" style="margin-top:20px">
                            <h2 class="title18 text-uppercase  font-bold">LEAVE A REPLY</h2>
                            <p class="desc  silver">Your email address will not be published. Required fields are marked *</p>
                            <form class="contact-form">
                                <p class="contact-name">
                                    <input class=" border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="User name*" type="text">
                                </p>
                                <p class="contact-email">
                                    <input class=" border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Email*" type="text">
                                </p>
                                <p class="contact-message">
                                    <textarea class=" border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" cols="30" rows="10">Your comment*</textarea>
                                </p>
                                <p class="contact-submit">
                                    <input  class="shop-button bg-color" type="submit" value="Post Comment">
                                </p>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar sidebar-right sidebar-blog">
                        <div class="widget widget-category">
                            <h2 class="widget-title title18 font-bold  text-uppercase">Categories</h2>
                            <div class="widget-content">
                                <ul class="list-none toggle-tab">
                                    <li class="item-toggle-tab active">
                                        <a href="#" class=" text-uppercase toggle-tab-title">Mobile</a>
                                        <ul class="list-none toggle-tab-content">
                                            <li><a href="#" class=" silver">IPhone7 plus </a><span class="smoke">(5)</span></li>
                                            <li><a href="#" class=" silver">Lenovo smartphone</a><span class="smoke">(7)</span></li>
                                            <li><a href="#" class=" silver">Ella angle</a><span class="smoke">(3)</span></li>
                                            <li><a href="#" class=" silver">Samsung Galaxy</a><span class="smoke">(4)</span></li>
                                        </ul>
                                    </li>
                                    <li class="item-toggle-tab">
                                        <a href="#" class=" text-uppercase toggle-tab-title">Laptop</a>
                                        <ul class="list-none toggle-tab-content">
                                            <li><a href="#" class=" silver">IPhone7 plus </a><span class="smoke">(5)</span></li>
                                            <li><a href="#" class=" silver">Lenovo smartphone</a><span class="smoke">(7)</span></li>
                                            <li><a href="#" class=" silver">Ella angle</a><span class="smoke">(3)</span></li>
                                            <li><a href="#" class=" silver">Samsung Galaxy</a><span class="smoke">(4)</span></li>
                                        </ul>
                                    </li>
                                    <li class="item-toggle-tab">
                                        <a href="#" class=" text-uppercase toggle-tab-title">Watches</a>
                                        <ul class="list-none toggle-tab-content">
                                            <li><a href="#" class=" silver">IPhone7 plus </a><span class="smoke">(5)</span></li>
                                            <li><a href="#" class=" silver">Lenovo smartphone</a><span class="smoke">(7)</span></li>
                                            <li><a href="#" class=" silver">Ella angle</a><span class="smoke">(3)</span></li>
                                            <li><a href="#" class=" silver">Samsung Galaxy</a><span class="smoke">(4)</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                        <div class="widget widget-latest-post">
                            <h2 class="widget-title title18 font-bold  text-uppercase">LATEST POSTS</h2>
                            <div class="widget-content">
                                <ul class="list-none">
                                    <li>
                                        <div class="item-wg-post table">
                                            <div class="post-thumb banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link border"><img src="images/blog/thumb/fb-tech-watch-05.jpg" alt="" /></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="font-bold title14"><a href="#">Just another post with A Gallery</a></h3>
                                                <span class="color">Feb 26, 2017 </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-wg-post table">
                                            <div class="post-thumb banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link border"><img src="images/blog/thumb/fb-tech-watch-03.jpg" alt="" /></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="font-bold title14"><a href="#">A Simple Blog Post</a></h3>
                                                <span class="color">Feb 26, 2017 </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-wg-post table">
                                            <div class="post-thumb banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link border"><img src="images/blog/thumb/fb-tech-watch-06.jpg" alt="" /></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="font-bold title14"><a href="#">Just another post with A Gallery</a></h3>
                                                <span class="color">Feb 26, 2017 </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                        <div class="widget widget-recent-comment">
                            <h2 class="widget-title title18 font-bold  text-uppercase">RECENT COMMENTS</h2>
                            <div class="widget-content">
                                <ul class="list-none">
                                    <li>
                                        <div class="item-wg-comment table">
                                            <div class="post-comment-count">
                                                <a href="#" class="post-comment-link border color"><i class="icon ion-chatboxes"></i><span>3</span></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="font-bold title14"><a href="#">Just another post with A Gallery</a></h3>
                                                <span class="color">Feb 26, 2017 </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-wg-comment table">
                                            <div class="post-comment-count">
                                                <a href="#" class="post-comment-link border color"><i class="icon ion-chatboxes"></i><span>3</span></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="font-bold title14"><a href="#">Just another post with A Gallery</a></h3>
                                                <span class="color">Feb 26, 2017 </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-wg-comment table">
                                            <div class="post-comment-count">
                                                <a href="#" class="post-comment-link border color"><i class="icon ion-chatboxes"></i><span>3</span></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="font-bold title14"><a href="#">Just another post with A Gallery</a></h3>
                                                <span class="color">Feb 26, 2017 </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content Pages -->
    </div>
</section>
<!-- End Content -->
@endsection
