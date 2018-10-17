@extends('layouts.app')

@section('content')
<div class="container">
	
	<h1>All the students</h1>

	@if (session('success'))
    <div class="alert alert-success">
		{{ session('success') }}
    </div>
    @endif

	<nav class="nav">
		<a class="nav-link" href="{{ URL::to('students/create') }}">Add new student</a>
	</nav>

	<table class="table table-bordered">		
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th colspan="3">Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($students as $student)
		<tr>
			<th scope="row">{{ $student->id }}</th>
			<td>{{ $student->first_name }}</td>
			<td>{{ $student->last_name }}</td>
			<td><a class="btn btn-success" href="{{action('StudentController@show', ['id' => $student->id])}}" role="button">View</a></td>
			<td><a class="btn btn-warning" href="{{action('StudentController@edit', ['id' => $student->id])}}" role="button">Edit</a></td>
			<td>
				<form action="{{action('StudentController@destroy', ['id' => $student->id])}}" method="post">
					@csrf
					@method('DELETE')
					<button class="btn btn-danger" type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	{{ $students->links() }}

</div>
@endsection