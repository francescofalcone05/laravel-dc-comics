@extends('layouts.app')

@section('content')
	<div class="container d-flex flex-wrap">

		<div class="card" style="width: 18rem;">
			<img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">{{ $comic->title }}</h5>
				<p class="card-text">{{ $comic->description }}</p>
				<a href="{{ route('comics.index') }}" class="btn btn-primary">back to the list</a>
			</div>
		</div>

	</div>
@endsection
