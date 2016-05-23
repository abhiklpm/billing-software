<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div id='wrapper'>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Laravel</a>
		</div>

		<ul class="nav navbar-top-links navbar-right">
		    <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
		            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
		        </a>
		        <ul class="dropdown-menu dropdown-user">
		            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
		            </li>
		            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
		            </li>
		            <li class="divider"></li>
		            <li><a href="http://demo.startlaravel.com/sb-admin-laravel/login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
		            </li>
		        </ul>
		        <!-- /.dropdown-user -->
		    </li>
		    <!-- /.dropdown -->
		</ul>

		<div class="navbar-default sidebar" role="navigation">
        	<div class="sidebar-nav navbar-collapse">
				<ul class="nav in" id="side-menu">
					<li>
			            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
			            <ul class="nav nav-second-level collapse in" aria-expanded="true">
			                <li>
			                    <a href="#">Second Level Item</a>
			                </li>
			                <li>
			                    <a href="#">Second Level Item</a>
			                </li>
			                <li>
			                    <a href="#">Third Level <span class="fa arrow"></span></a>
			                    <ul class="nav nav-third-level collapse">
			                        <li>
			                            <a href="#">Third Level Item</a>
			                        </li>
			                        <li>
			                            <a href="#">Third Level Item</a>
			                        </li>
			                        <li>
			                            <a href="#">Third Level Item</a>
			                        </li>
			                        <li>
			                            <a href="#">Third Level Item</a>
			                        </li>
			                    </ul>
			                    <!-- /.nav-third-level -->
			                </li>
			            </ul>
			            <!-- /.nav-second-level -->
			        </li>
		        </ul>
	        </div>
        </div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('/') }}">Home</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ url('/auth/login') }}">Login</a></li>
					<li><a href="{{ url('/auth/register') }}">Register</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</nav>

	<div id="page-wrapper">
		<div class="row">
			@yield('content')
		</div>
	</div>
</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
