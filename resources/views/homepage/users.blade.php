<!DOCTYPE HTML>

<html>
	<head>
		<title>USER</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<?php //include 'clock.php' ?>

	</head>

	<body>


		<!-- Header -->
			<header id="header">
				<h1><a href="users.php">TOTO</a></h1>

				<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest

										<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

								@if (Route::has('register'))

												<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

								@endif
						@else

										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
												{{ Auth::user()->username }} <span class="caret"></span>
										</a>

										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{ route('logout') }}"
													 onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
												</form>
										</div>
								
						@endguest
				</ul>
				<!-- <a href="#nav">Menu</a> -->
			</header>



	@yield('content')






		<!-- Main -->


		<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>If you want to say something about us</p>
					</header>
					<form action="" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>


@include('homepage.footer')
