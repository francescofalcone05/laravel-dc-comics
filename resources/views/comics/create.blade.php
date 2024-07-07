@extends('layouts.app')

@section('content')
	<div class="container d-flex flex-wrap">
		<form class="row g-3" method="POST" action="{{ route('comics.store') }}">
			@csrf
			<div class="col-md-6">
				<label for="validationServer01" class="form-label">Title</label>
				<input type="text" class="form-control" id="validationServer01" value="" name="title" required>
			</div>
			<div class="col-md-6">
				<label for="validationServer02" class="form-label">Series</label>
				<input type="text" class="form-control" id="validationServer02" name="series" value="" required>
			</div>
			<div class="col-md-12">
				<label for="validationServerUsername" class="form-label">Description</label>
				<div class="input-group has-validation">
					<input type="text" class="form-control" id="validationServerUsername"
						aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="description" required>
				</div>
			</div>
			<div class="col-md-12">
				<label for="validationServer03" class="form-label">Thumb path</label>
				<input type="text" class="form-control" id="validationServer03" name="thumb"
					aria-describedby="validationServer03Feedback" required>
			</div>
			<div class="col-md-3">
				<label for="validationServer04" class="form-label">Type</label>
				<select class="form-select" id="validationServer04" name="type" aria-describedby="validationServer04Feedback"
					required>
					<option selected disabled value="">Choose...</option>
					<option>comic book</option>
					<option>graphic novel</option>
				</select>
			</div>
			<div class="col-md-3">
				<label for="validationServer05" class="form-label">Price</label>
				<input type="text" class="form-control" id="validationServer05" name="price"
					aria-describedby="validationServer05Feedback" required>
			</div>
			<div class="col-md-3">
				<label for="validationServer05" class="form-label">Sale Date</label>
				<input type="text" class="form-control" id="validationServer05" name="sale_date"
					aria-describedby="validationServer05Feedback" required>
			</div>
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Submit form</button>
			</div>
		</form>
	</div>
@endsection
