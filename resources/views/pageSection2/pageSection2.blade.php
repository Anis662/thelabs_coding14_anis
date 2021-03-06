
	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->

					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{ asset("img/blog/$article->image") }}" alt="">
							<div class="post-date">
								<h2>{{ $article->created_at->format('d') }}</h2>
								<h3>{{ $article->created_at->format('M Y') }}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{ $article->titre }}</h2>
							<div class="post-meta">
								<a href="">{{ $article->users->name}}</a>
								<a href="">
									@foreach ($article->tags as $i)
										{{ $i->name }}
									@endforeach
								</a>
								<a href="">{{ count($article->commentaires) }} Comments</a>
																
							</div>
							<p>{{ $article->text }}</p>
							{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. </p>
							<p>Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem. </p> --}}
						</div>
							
						<!-- Post Author -->
						
						<div class="author">
							<div class="avatar">
								<img src="/img/{{$article->users->photo }}"  alt="">
							</div>
							<div class="author-info">
								<h2>{{$article->users->name }} <span>{{ $article->users->roles->name }}</span></h2>
								<p>{{ $article->description }}</p>
							</div>
						</div>
						<!-- Post Comments -->
					<div class="comments">
						<h2>Comments ({{ count($article->commentaires) }})</h2>
							
						<ul class="comment-list">
							@foreach ($article->commentaires as $i)
							<li>
								<div class="avatar">
									<img src="/img/{{$i->users->photo}}">
								</div>
								<div class="commetn-text">
									<h3> {{ $i->users->name}}| {{ $i->created_at->format('d M Y')  }} | Reply</h3>
									<p>{{ $i->text }} </p>
								</div>
							</li>
							@endforeach
							
						</ul>
					</div>

					@if (Auth::user())
					<div class="row">
						<div class="col-md-9 comment-from">
							<h2>Leave a comment</h2>

							<form class="form-class" action="/commentaire/{{ $article->id }}" method="POST">
								@csrf
								<div class="row">
									 {{-- <div class="col-sm-6">
										<input type="text" name="name" placeholder="Your name">
									</div> 
									{<div class="col-sm-6">
										<input type="text" name="email" placeholder="Your email">
									</div>  --}}
									 <div class="col-sm-12"> 
										{{-- <input type="text" name="subject" placeholder="Subject"> --}}
										<textarea name="text" placeholder="Message"></textarea>
										<button type="submit" class="site-btn">Poster un commentaire </button>
									</div>
								</div> 
							</form> 
						</div>
					</div>
					@else
					<a href="{{ route("login") }}" class="btn btn-success">Login</a>
					<a href="{{ route("register") }}" class="btn btn-info">Register</a>


					@endif
				

						<!-- Commert Form -->
					
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="#">Vestibulum maximus</a></li>
							<li><a href="#">Nisi eu lobortis pharetra</a></li>
							<li><a href="#">Orci quam accumsan </a></li>
							<li><a href="#">Auguen pharetra massa</a></li>
							<li><a href="#">Tellus ut nulla</a></li>
							<li><a href="#">Etiam egestas viverra </a></li>
						</ul>
					</div>
					<!-- Single widget -->
					{{-- <div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							<li><img src="{{ asset("img/instagram/1.jpg") }}" alt=""></li>
							<li><img src="{{ asset("img/instagram/2.jpg") }}" alt=""></li>
							<li><img src="{{ asset("img/instagram/3.jpg") }}" alt=""></li>
							<li><img src="{{ asset("img/instagram/4.jpg") }}" alt=""></li>
							<li><img src="{{ asset("img/instagram/5.jpg") }}" alt=""></li>
							<li><img src="{{ asset("img/instagram/6.jpg") }}" alt=""></li>
						</ul>
					</div> --}}
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<li><a href="">branding</a></li>
							<li><a href="">identity</a></li>
							<li><a href="">video</a></li>
							<li><a href="">design</a></li>
							<li><a href="">inspiration</a></li>
							<li><a href="">web design</a></li>
							<li><a href="">photography</a></li>
						</ul>
					</div>
					<!-- Single widget -->
					{{-- <div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div> --}}
					<!-- Single widget -->
					{{-- <div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="{{ asset("img/add.jpg") }}" alt=""></a>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->