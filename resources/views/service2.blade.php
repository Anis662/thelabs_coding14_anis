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
        <ul class="menu-list">
            <li>
                <form method="POST" action="{{ route('logout') }}"> 
                    @csrf
              
                    <x-jet-responsive-nav-link href="{{ route('logout') }}" class="mx-3 btn"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>

            </li>
        </ul>
        @foreach ($navbar as $i)
        <ul class="menu-list">
            <li ><a href="{{ route("home1") }}">{{ $i->link1 }}</a></li>
            <li class="active"><a href="{{ route("service") }}">{{ $i->link2 }}</a></li>
            <li ><a href="{{ route("blog") }}">{{ $i->link3 }}</a></li>
            <li ><a href="{{ route("contact") }}">{{ $i->link4 }}</a></li>
            <li class=""> <a href="{{ route("adminHome") }}"><b class="text-danger">Admin</b>LTE</a></li>
            <li class=" text-info">Connecté</li>
           
           
           
        </ul>
            
        @endforeach
    </nav>
</header>
<!-- Header section end -->

@include('pageHeader.pageHeader')

@include('service.service')

@include('feature.feature')

@include('serviceCard.serviceCard')

@include('newsletter.newsletter')

@include('contact.contact')

@endsection
