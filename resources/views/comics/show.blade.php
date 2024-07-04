@extends('layouts.app')

@section('content')
	<div class="container text-center">

		<div class="card m-auto" style="width: 30rem;">
			<img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">{{ $comic->title }}</h5>
				<p class="card-text">{{ $comic->description }}</p>
				<p class="card-text">Price: {{ $comic->price }} €</p>
				<p class="card-text">Type: {{ $comic->type }}</p>
				<p class="card-text">Series: {{ $comic->series }}</p>
				<p class="card-text">Sale Date: {{ $comic->sale_date }}</p>
				<a href="{{ route('comics.index') }}" class="btn btn-primary">back to the list</a>
			</div>
		</div>

	</div>
@endsection
