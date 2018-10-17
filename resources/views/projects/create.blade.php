@extends('layouts.app')

@section('content')
<div class="container">

	<h1>Add a new project</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
	
	<nav class="navbar navbar-inverse">
	    <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('projects') }}">View All Projects</a></li>
	    </ul>
	</nav>

	<form method="POST" action="{{ url('projects') }}">
        @csrf

		<div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Project Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-4 col-form-label text-md-right">{{ __('Project Description') }}</label>

            <div class="col-md-6">
                <textarea id="description" name="description" rows="5" cols="50">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>                             
            </div>
        </div>
	</form>
</div>
@endsection