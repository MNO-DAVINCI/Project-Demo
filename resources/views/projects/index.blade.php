@extends('layouts.app')

@section('content')
<div class="container">
	<h1>All the projects</h1>

	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
	@if (session('success'))
    <div class="alert alert-success">
		{{ session('success') }}
    </div>
    @endif

	<nav class="nav">
			<a class="nav-link" href="{{ URL::to('projects/create') }}">Add new project</a>
	</nav>

	<div class="row">
		<table class="table table-bordered">		
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Project Name</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($projects as $project)
			<tr>
				<th scope="row">{{ $project->id }}</th>
				<td>{{ $project->name }}</td>
				<td><a class="btn btn-success" href="{{action('ProjectController@show', ['id' => $project->id])}}" role="button">View</a></td>
				<td><a class="btn btn-warning" href="{{action('ProjectController@edit', ['id' => $project->id])}}" role="button">Edit</a></td>
				<td>
					<form action="{{action('ProjectController@destroy', ['id' => $project->id])}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
		{{ $projects->links() }}
	</div>

</div>
@endsection