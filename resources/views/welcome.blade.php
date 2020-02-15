@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('content')
<section id="content">
    @include('partials.slider')
    @include('partials.banner')
    @include('partials.body')
    @include('partials.offer')
    @include('partials.body')
    @include('partials.quote')
    @include('partials.blog')

</section>
@endsection
