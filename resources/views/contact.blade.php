@extends('templates.structure')
@section('content')
    
	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			@foreach ($logo as $i)
			<img class="logo1" src="{{ asset("img/$i->logo") }}" alt=""><!-- Logo -->
				
			@endforeach
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			@foreach ($navbar as $i)
			<ul class="menu-list">
				<li><a href="{{ route("home1") }}">{{ $i->link1 }}</a></li>
				<li><a href="{{ route("service") }}">{{ $i->link2 }}</a></li>
				<li><a href="{{ route("blog") }}">{{ $i->link3 }}</a></li>
				<li class="active"><a href="{{ route("contact") }}">{{ $i->link4 }}</a></li>
				<li ><a href="{{ route("login") }}">Login</a></li>
				<li ><a href="{{ route("register") }}">Register</a></li>
			</ul>
				
			
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>{{ $i->link4 }}</h2>
				<div class="page-links">
					<a href="{{ route("home1") }}">{{ $i->link1 }}</a>
					<span>{{ $i->link4 }}</span>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<!-- Page header end -->

    <!-- Google map -->
	{{-- <div class="map" id="map-area"></div> --}}
	<div class="mapouter w-100"><div class="gmap_canvas"><iframe width="100%" class="w-100" height="794" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $adresse->addresse }}&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/maps/40"></a><br><style>.mapouter{position:relative;text-align:right;height:794px;width:100%;}</style><a href="https://google-map-generator.com">google map in website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:794px;width:100%;}</style></div></div>


    @include('contact.contact')
@endsection





