@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">Profile</div>

				<div class="card text-center">
					<div class="card-header text-white bg-dark mb-3">
						Profile
					</div>
					<div class="card-body">
						<h5 class="card-title"></h5>
						<p class="card-text">Name: {{$users->name}}</p>
						<p class="card-text">Email: {{$users->email}}</p>
					</div>
					<div class="card-footer text-muted">
						Registered: {{$users->created_at}}
					</div>
				</div>

				<div class="card-body">

					<div class="mt-5">
						@if(isset($records))

						<table class="table table-striped table-hover">
							<thead class="thead-dark">
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Address</th>
									<th>Contact#</th>
									<th>Education</th>
									<th>Job</th>
									<th>Company</th>
								</tr>
							</thead>
							<tbody>
								@foreach($records as $record)
								<tr>
									<td>{{ $record->id }}</td>
									<td>{{ $record->name }}</td>
									<td>{{ $record->address }}</td>
									<td>{{ $record->contact }}</td>
									<td>{{ $record->education}}</td>
									<td>{{ $record->job}} </td>
									<td>{{ $record->company}} </td>
								</tr>
								@endforeach
							</tbody>
						</table>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">

</script>
@endsection