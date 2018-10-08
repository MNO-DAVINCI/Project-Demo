@extends('layouts.app')

@section('content')
<div class="container">
	
	<h1>All the students</h1>

	<nav class="nav">
		<a class="nav-link" href="{{ URL::to('students/create') }}">Add new student</a>
	</nav>

	<table class="table table-bordered">		
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($students as $student)
		<tr>
			<th scope="row">{{ $student->id }}</th>
			<td>{{ $student->first_name }}</td>
			<td>{{ $student->last_name }}</td>
			<td>
				<a class="btn btn-success" href="#" role="button">View</a>
				<a class="btn btn-warning" href="#" role="button">Edit</a>
				<a class="btn btn-danger" href="#" role="button">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	{{ $students->links() }}

</div>
@endsection