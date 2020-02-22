@extends('layouts.app')

@section('title')
    Blog
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
                        <h2 class="font-bold title30 text-uppercase title-line-after pull-left">Blog</h2>
                    </div>
                </div>
            </div>
            <div class="blog-gridview">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="item-post drop-shadow">
                                <div class="banner-adv overlay-image zoom-image">
                                    <a href="#" class="adv-thumb-link"><img src="{{$post->getFirstMediaUrl('posts')}}" alt=""></a>
                                </div>
                                <div class="post-info">
                                    <h3 class="title18 font-bold"><a href="#">{{$post->title}} </a></h3>
                                    <ul class="list-none total-post-info">
                                        <li>
                                            <div class="post-date-author title12">
                                                <span class="color"><i class="icon ion-calendar"></i>{{$post->createdAt->diffForHumans()}}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="desc">{{Str::limit($post->description, 150)}}</p>
                                    <a href="#" class="shop-button color">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pagi-nav text-center">
                {{$posts->links()}}
            </div>
        </div>
        <!-- End Content Pages -->
    </div>
</section>
@endsection
