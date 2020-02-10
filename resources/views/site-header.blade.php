<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="{{ asset('/uploads/logo.png') }}">
	<title>@yield('title')</title>
	@yield('meta')
	@yield('plugins')

	<!--Styles-->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}

	<!--Fontawesome-->
	<link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

	<!-- Animate Css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">

	<!--Slick CSS -->
	<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

	<!--Custom Css-->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

</head>
<body>
<!--Header-->
<!-- topbar starts here -->
<header>
	<div class="container-fluid topbar">
		<div class="row">
			<div class="col-md-4 socialicons">
				<ul>
					<li><i class="fa fa-facebook-square"></i></li>
					<li><i class="fa fa-twitter"></i></li>
					<li><i class="fa fa-instagram"></i></li>
					<li><i class="fa fa-linkedin"></i></li>
				</ul>
			</div>
			<div class=" col-md-8 searchbar">
				<ul>
					<li>APPLY ONLINE: </li>
					<li>+123-456-789</li>
					<LI>Email:someone@gmail.com</LI>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid header">
		<div class="row">
			<div class="col-md-4">
				<img src="http://josephschool.edu.np/images/logolf.jpg" class="responsive">
			</div>
			<div class="col-md-4">
				<img src="http://josephschool.edu.np/images/logort.jpg" class="responsive">
			</div>
			<div class="col-md-4">
				<img src="http://josephschool.edu.np/images/isa.jpg" class="responsive">
			</div>

		</div>

	</div>
	<!-- topbar ends here -->

	<!-- navbar starts here -->
	<nav class="navbar navbar-expand-md bg-green navbar-dark sticky-top">
 <!-- Links -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<!--DROPDOWN STARTS-->
					@foreach($pages as $page)
						@if($page->categories->count() >1)
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">{{ $page->title }} <i class="fas fa-chevron-down fa-xs"></i></a>
								<div class="dropdown-menu box">
									@foreach($page->categories as $category)
									<a class="dropdown-item" href="#">{{ $category->name }}</a>
									@endforeach
								</div>
							</li>
						@else
							<li class="nav-item">
							<a class="nav-link" href="#">{{ $page->title }}</a>
							</li>
						@endif
					@endforeach
				{{--<li class="nav-item dropdown">--}}
					{{--<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">--}}
						{{--OUR COURSES--}}
					{{--</a>--}}
					{{--<div class="dropdown-menu box">--}}
						{{--<a class="dropdown-item" href="#">All Courses</a>--}}
						{{--<a class="dropdown-item" href="#">Play Group</a>--}}
						{{--<a class="dropdown-item" href="#">school Level</a>--}}
						{{--<a class="dropdown-item" href="#">Management</a>--}}
						{{--<a class="dropdown-item" href="#">Humanities</a>--}}
					{{--</div>--}}
				{{--</li>--}}
				{{--<li class="nav-item">--}}
					{{--<a class="nav-link" href="#">GALLERY</a>--}}
				{{--</li>--}}
				{{--<li class="nav-item dropdown">--}}
					{{--<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">ADMISSION</a>--}}
					{{--<div class="dropdown-menu box">--}}
						{{--<a class="dropdown-item" href="#">Admission Policy</a>--}}
						{{--<a class="dropdown-item" href="#">Online Application</a>--}}
					{{--</div>--}}
				{{--</li>--}}
				{{--<li class="nav-item">--}}
					{{--<a class="nav-link" href="#">CONTACT</a>--}}
				{{--</li>--}}
				{{--<li class="nav-item">--}}
					{{--<input class="placeholder" type="text" placeholder="Search"></li>--}}

			</ul>
		</div>

	</nav>
	<!-- navbar ends here -->
</header>
<!-- HEADER ENDS HERE -->
