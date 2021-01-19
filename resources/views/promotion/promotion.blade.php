
	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				@foreach ($ready as $i)
				<div class="col-md-9">
					<h2>{{ $i->titre }}</h2>
					<p>{{ $i->text }}</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="{{ route("contact") }}" class="site-btn btn-2">{{ $i->button }}</a>
					</div>
				</div>
					
				@endforeach
			</div>
		</div>
	</div>
	<!-- Promotion section end-->