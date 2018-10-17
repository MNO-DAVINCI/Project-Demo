@extends('layouts.app')

@section('content')
<div class="container">
	
	<nav class="nav">
		<a class="nav-link" href="{{ URL::to('projects') }}">Back to all the projects</a>
	</nav>

	<h1>{{ $project->name }}</h1>
	<p><strong>Description:</strong> {{ $project->description }}</p>

	<hr>

	<h4>Students in this project</h4>

	<table class="table table-bordered">		
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($project->students as $student)
		<tr>
			<th scope="row">{{ $student->id }}</th>
			<td>{{ $student->first_name }}</td>
			<td>{{ $student->last_name }}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection