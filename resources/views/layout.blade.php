<!DOCTYPE html>
<html>
<head>
	 @include('layouts.head')
</head>

<body>
	@include('layouts.header')
	@include('layouts.banner')
	@yield('slider');
	@yield('content')
	@include('layouts.footer')
	@include('layouts.script')
</body>
</html>
