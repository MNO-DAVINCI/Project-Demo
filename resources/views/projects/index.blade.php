@extends('layouts.app')

@section('content')
<div class="container">
	<h1>All the projects</h1>

	<nav class="nav">
			<a class="nav-link" href="{{ URL::to('projects/create') }}">Add new project</a>
	</nav>

	<div class="row">
		<table class="table table-bordered">		
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Project Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($projects as $project)
			<tr>
				<th scope="row">{{ $project->id }}</th>
				<td>{{ $project->name }}</td>
				<td>
					<a class="btn btn-success" href="#" role="button">View</a>
					<a class="btn btn-warning" href="#" role="button">Edit</a>
					<a class="btn btn-danger" href="#" role="button">Delete</a>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
		{{ $projects->links() }}
	</div>

</div>
@endsection