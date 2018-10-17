@extends('layouts.app')

@section('content')
<div class="container">

	<nav class="nav">
		<a class="nav-link" href="{{ URL::to('students') }}">Back to all the students</a>
	</nav>

	<h1>{{ $student->first_name }} {{ $student->last_name }}</h1>
	
	<h4>Projects this student is in</h4>

	<table class="table table-bordered">		
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Project Name</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($student->projects as $project)
		<tr>
			<th scope="row">{{ $project->id }}</th>
			<td>{{ $project->name }}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection