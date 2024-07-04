<header class="bg-light">
	<div class="container text-center my-1">
		@if (Route::currentRouteName() !== 'home')
			<a href="{{ route('home') }}">HOME</a>
		@endif
		@if (Route::currentRouteName() !== 'comics')
			<a href="{{ route('comics') }}">COMICS LIST</a>
		@endif
	</div>
</header>
