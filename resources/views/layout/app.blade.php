<!DOCTYPE html>
<html lang="en">
<head>
	<title> IskoVote | @yield('title')</title>
	@include('components.header')
</head>

<body class="nav-md">
	
    		
@section('admin.navbar')
	@include('admin.navbar')
@show


@yield('content')
</div></div>


@include('components.footer')
</body>
</html>
