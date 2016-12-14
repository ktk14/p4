<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title','EOKeeper')
	</title>

	<meta charset='utf-8'>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='viewport' content='width=device-width, initial-scale=1'>

	<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<link href='/css/eokeeper.css' type='text/css' rel='stylesheet'>

	@yield('head')

</head>
<body>

	@if(Session::get('flash_message') != null)
		<div class='flash_message'>{{ Session::get('flash_message') }}</div>
	@endif

	<header>
		<a href='/'>
			<img src='/images/logo.jpg' alt='EOKeeper Logo' class='logo'>
		</a>
	</header>

	<nav>
		<ul>
			@if(Auth::check())
				<li><a href='/'>Home</a></li>
				<li><a href='/oils/create'>Add an oil</a></li>
				<li><a href='/logout'>Log out</a></li>
			@else
				<li><a href='/'>Home</a></li>
				<li><a href='/login'>Log in</a></li>
				<li><a href='/register'>Register</a></li>
			@endif
		</ul>
	</nav>


	<section>
		@yield('content')
	</section>

	<footer>
		&copy; {{ date('Y') }} &nbsp;&nbsp;
		<a href='http://p4.katielu.me' target='_blank'><i class='fa fa-link'></i> View Live</a> &nbsp;&nbsp;
		<a href='http://p1.katielu.me' target='_blank'><i class='fa fa-link'></i> View P1 Index</a>
	</footer>

	@yield('body')

</body>
</html>
