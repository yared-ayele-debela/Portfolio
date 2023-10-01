<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.3rdwavemedia.com/devcard/bs5/2.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 14:02:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Yared Ayele Debela</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DevCard Bootstrap 5 Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- FontAwesome JS -->
    <script defer src="{{asset('fontend/assets/fontawesome/js/all.js') }}"></script>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('fontend/assets/plugins/tiny-slider/tiny-slider.css')}}">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="{{asset('fontend/assets/css/theme-6.css')}}">

</head>

<body>
    @include('fontend.sidebar',['resume' => $resume])

	<div class="main-wrapper">

	@yield('content')


	<div id="config-panel" class="config-panel config-panel-hide d-none d-lg-block">
		<div class="panel-inner">
			<a id="config-trigger" class="config-trigger text-center" href="#"><i class="fas fa-cog mx-auto" data-fa-transform="down-6" ></i></a>
			<h5 class="panel-title">Choose Colour</h5>
			<ul id="color-options" class="list-inline mb-0">
				<li class="theme-1  list-inline-item"><a data-style="{{ asset('fontend/assets/css/theme-1.css')}}" href="#"></a></li>
				<li class="theme-2  list-inline-item"><a data-style="{{ asset('fontend/assets/css/theme-2.css')}}" href="#"></a></li>
				<li class="theme-3  list-inline-item"><a data-style="{{ asset('fontend/assets/css/theme-3.css')}}" href="#"></a></li>
				<li class="theme-4  list-inline-item"><a data-style="{{ asset('fontend/assets/css/theme-4.css')}}" href="#"></a></li>
				<li class="theme-5  list-inline-item"><a data-style="{{ asset('fontend/assets/css/theme-5.css')}}" href="#"></a></li>
				<li class="theme-6  list-inline-item active"><a data-style="{{ asset('fontend/assets/css/theme-6.css')}}" href="#"></a></li>
				<li class="theme-7  list-inline-item"><a data-style="{{ asset('fontend/assets/css/theme-7.css')}}" href="#"></a></li>
				<li class="theme-8  list-inline-item"><a data-style="{{ asset('fontend/assets/css/theme-8.css')}}" href="#"></a></li>
				<li class="theme-9  list-inline-item"><a data-style="{{ asset('fontend/assets/css/theme-9.css')}}" href="#"></a></li>
				<li class="theme-10  list-inline-item"><a data-style="{{ asset('fontend/assets/css/theme-10.css')}}" href="#"></a></li>
			</ul>
			<a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
		</div><!--//panel-inner-->
	</div>
    @include('fontend.footer')
	</div>
		<!-- Javascript -->
	<script src="{{asset('fontend/assets/plugins/popper.min.js')}}"></script>
	<script src="{{asset('fontend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('fontend/assets/plugins/tiny-slider/min/tiny-slider.js')}}"></script>
	<script src="{{asset('fontend/assets/js/testimonials.js')}}"></script>

	<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
	<script src="{{asset('fontend/assets/js/demo/style-switcher.js')}}"></script>

	<!-- Dark Mode -->
	<script src="{{asset('fontend/assets/plugins/js-cookie.min.js')}}"></script>
	<script src="{{asset('fontend/assets/js/dark-mode.js')}}"></script>

</body>

</html>
