@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Personal Information</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					<form enctype="multipart/form-data" action="/recordstore" method="post">
						@csrf
						
						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fullname') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required autofocus>
							</div>
						</div>

						<div class="form-group row">
							<label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

							<div class="col-md-6">
								<input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required autofocus>
							</div>
						</div>
						<div class="form-group row">
							<label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

							<div class="col-md-6">
								<input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" required autofocus>
							</div>
						</div>

						<div class="form-group row">
							<label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

							<div class="col-md-6">
								<input type="file" name="picture" class="form-control" id="picture">
							</div>
						</div>
						

						<div class="form-group row">
							<label for="education" class="col-md-4 col-form-label text-md-right">{{ __('Education') }}</label>

							<div class="col-md-6">
								<input id="education" type="text" class="form-control{{ $errors->has('education') ? ' is-invalid' : '' }}" name="education" required autofocus>
							</div>
						</div>

						<div class="form-group row">
							<label for="job" class="col-md-4 col-form-label text-md-right">{{ __('Job') }}</label>

							<div class="col-md-6">
								<input id="job" type="text" class="form-control{{ $errors->has('job') ? ' is-invalid' : '' }}" name="job" required autofocus>
							</div>
						</div>


						<div class="form-group row">
							<label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

							<div class="col-md-6">
								<input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" required autofocus>
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Save') }}
								</button>
							</div>
						</div>


					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
