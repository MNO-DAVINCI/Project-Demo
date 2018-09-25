@extends('layouts.app')

@section('content')
<h1>All the projects</h1>

<nav">
    <ul>
        <li><a href="{{ URL::to('students') }}">View All Students</a></li>
    </ul>
</nav>

<table>		
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Description</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($projects as $project)
	<tr>
		<th>{{ $project->id }}</th>
		<td>{{ $project->name }}</td>
		<td>{{ $project->description }}</td>
	</tr>
	@endforeach
	</tbody>
</table>
@endsection