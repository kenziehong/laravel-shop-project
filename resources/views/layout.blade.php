<!DOCTYPE html>
<html>
<head>
	 @include('layouts.head')
</head>

<body>
	@include('layouts.header')
    @include('layouts.thanh_danh_muc')
	@include('layouts.banner')
	@include('layouts.slider_layout')
	@yield('content')
	@include('layouts.footer')
	@include('layouts.script')
</body>
</html>
