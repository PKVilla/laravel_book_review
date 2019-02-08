<!DOCTYPE html>
<html>
<head>
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	@include('header') <!-- this is called directives -->
</head>
<body>

	@include('nav')

	@yield('admin_body') <!-- user defined ('body') -->

	@yield('user_body')

	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
	
</body>
</html>