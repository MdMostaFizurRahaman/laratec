<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="FB-Tech is new Html theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Html theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="FB-Tech,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<title>{{config('app.name', 'Laravel')}} | Home 01</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/ionicons.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/jquery.fancybox.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/owl.carousel.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/owl.transitions.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/jquery.mCustomScrollbar.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/owl.theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/libs/hover.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/color.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/theme.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/responsive.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/browser.css" media="all"/>
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/css/rtl.css" media="all"/> -->
</head>
<body class="preload">
<div class="wrap">
	@include('inc.header')
	<!-- End Header -->
	@yield('content')
	<!-- End Content -->
	@include('inc.footer')
	<!-- End Footer -->
	@include('inc.preloader')
	<!-- End Preload -->
	<a href="#" class="scroll-top dark"><i class="icon ion-android-navigate"></i></a>
</div>
<script src="{{asset('theme')}}/js/libs/jquery-3.3.1.min.js"></script>
<script src="{{asset('theme')}}/js/libs/bootstrap.min.js"></script>
<script src="{{asset('theme')}}/js/libs/jquery.fancybox.min.js"></script>
<script src="{{asset('theme')}}/js/libs/jquery-ui.min.js"></script>
<script src="{{asset('theme')}}/js/libs/owl.carousel.min.js"></script>
<script src="{{asset('theme')}}/js/libs/jquery.jcarousellite.min.js"></script>
<script src="{{asset('theme')}}/js/libs/jquery.elevatezoom.min.js"></script>
<script src="{{asset('theme')}}/js/libs/popup.min.js"></script>
<script src="{{asset('theme')}}/js/libs/timecircles.min.js"></script>
<script src="{{asset('theme')}}/js/libs/wow.min.js"></script>
<script src="{{asset('theme')}}/js/theme.js"></script>
</body>
</html>