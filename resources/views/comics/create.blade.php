@extends('layouts.app')

@section('content')
	<div class="container d-flex flex-wrap">
		<form class="row g-3">
			<div class="col-md-4">
				<label for="validationServer01" class="form-label">Title</label>
				<input type="text" class="form-control" id="validationServer01" value="" required>
				{{-- <div class="valid-feedback">
					Looks good!
				</div> --}}
			</div>
			<div class="col-md-4">
				<label for="validationServer02" class="form-label">Series</label>
				<input type="text" class="form-control" id="validationServer02" value="" required>
				{{-- <div class="valid-feedback">
					Looks good!
				</div> --}}
			</div>
			<div class="col-md-4">
				<label for="validationServerUsername" class="form-label">Description</label>
				<div class="input-group has-validation">
					<input type="text" class="form-control" id="validationServerUsername"
						aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
					{{-- <div id="validationServerUsernameFeedback" class="invalid-feedback">
						Please choose a series.
					</div> --}}
				</div>
			</div>
			<div class="col-md-6">
				<label for="validationServer03" class="form-label">Thumb path</label>
				<input type="text" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback"
					required>
				{{-- <div id="validationServer03Feedback" class="invalid-feedback">
					Please provide a valid series.
				</div> --}}
			</div>
			<div class="col-md-3">
				<label for="validationServer04" class="form-label">Type</label>
				<select class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" required>
					<option selected disabled value="">Choose...</option>
					<option>comic book</option>
					<option>graphic novel</option>
				</select>
				{{-- <div id="validationServer04Feedback" class="invalid-feedback">
					Please select a valid type.
				</div> --}}
			</div>
			<div class="col-md-3">
				<label for="validationServer05" class="form-label">Price</label>
				<input type="text" class="form-control" id="validationServer05" aria-describedby="validationServer05Feedback"
					required>
				{{-- <div id="validationServer05Feedback" class="invalid-feedback">
					Please provide a valid zip.
				</div> --}}
			</div>
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Submit form</button>
			</div>
		</form>
	</div>
@endsection
