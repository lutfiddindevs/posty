<!DOCTYPE html>
<html>
<head>
	<title>posty</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
    	<ul class="flex items-center">
    		<li>
    			<a href="" class="p-3">home</a>
    		</li>
    		<li>
    			<a href="" class="p-3">dashboard</a>
    		</li>
    		<li>
    			<a href="" class="p-3">post</a>
    		</li>
    	</ul>
    	<ul class="flex items-center">
    		<li>
    			<a href="" class="p-3">Alex Smith</a>
    		</li>
    		<li>
    			<a href="" class="p-3">login</a>
    		</li>
    		<li>
    			<a href="{{ route('register') }}" class="p-3">register</a>
    		</li>
    		<li>
    			<a href="" class="p-3">logout</a>
    		</li>
    	</ul>
    </nav>
	@yield('content')
</body>
</html>