@extends('layouts.app')

@section('content')
<h1>All the students</h1>

<nav">
    <ul>
        <li><a href="{{ URL::to('projects') }}">View All Projects</a></li>
    </ul>
</nav>

<table>		
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">First_name</th>
			<th scope="col">Last_name</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($students as $student)
	<tr>
		<th>{{ $student->id }}</th>
		<td>{{ $student->first_name }}</td>
		<td>{{ $student->last_name }}</td>
	</tr>
	@endforeach
	</tbody>
</table>
@endsection