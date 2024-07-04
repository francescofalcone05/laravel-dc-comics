<header class="bg-light">
	<div class="container text-center my-1">
		@if (Route::currentRouteName() !== 'home')
			<a href="{{ route('home') }}">HOME</a>
		@endif
		@if (Route::currentRouteName() !== 'comics.index')
			<a href="{{ route('comics.index') }}">COMICS LIST</a>
		@endif
		@if (Route::currentRouteName() == 'comics.index')
			<a href="{{ route('comics.create') }}">AGGIUNGI NUOVO COMIC</a>
		@endif
	</div>
</header>
