@extends('layouts.app')

@section('content')
	<div class="container d-flex flex-wrap">
		<form class="row g-3" method="POST" action="{{ route('comics.update', $comic->id) }}">
			@method('PUT')
			@csrf
			<div class="col-md-6">
				<label for="validationServer01" class="form-label">Title</label>
				<input type="text" class="form-control" id="validationServer01" value="{{ $comic->title }}" name="title" required>
			</div>
			<div class="col-md-6">
				<label for="validationServer02" class="form-label">Series</label>
				<input type="text" class="form-control" id="validationServer02" name="series" value="{{ $comic->series }}"
					required>
			</div>
			<div class="col-md-12">
				<label for="validationServerUsername" class="form-label">Description</label>
				<div class="input-group has-validation">
					<input type="text" class="form-control" id="validationServerUsername"
						aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" value="{{ $comic->description }}"
						name="description" required>
				</div>
			</div>
			<div class="col-md-12">
				<label for="validationServer03" class="form-label">Thumb path</label>
				<input type="text" class="form-control" id="validationServer03" value="{{ $comic->thumb }}" name="thumb"
					aria-describedby="validationServer03Feedback" required>
			</div>
			<div class="col-md-3">
				<label for="validationServer04" class="form-label">Type</label>
				<select class="form-select" id="validationServer04" name="type" value="{{ $comic->type }}"
					aria-describedby="validationServer04Feedback" required>
					<option selected disabled value="">Choose...</option>
					<option value="comic book">comic book</option>
					<option value="graphic novel">graphic novel</option>
				</select>
			</div>
			<div class="col-md-3">
				<label for="validationServer05" class="form-label">Price</label>
				<input type="text" class="form-control" id="validationServer05" value="{{ $comic->price }}" name="price"
					aria-describedby="validationServer05Feedback" required>
			</div>
			<div class="col-md-3">
				<label for="validationServer05" class="form-label">Sale Date</label>
				<input type="text" class="form-control" id="validationServer05" value="{{ $comic->sale_date }}" name="sale_date"
					aria-describedby="validationServer05Feedback" required>
			</div>
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Submit form</button>
			</div>
		</form>
	</div>
@endsection
