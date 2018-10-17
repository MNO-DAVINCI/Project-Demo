@extends('layouts.app')

@section('content')
<div class="container">

	<h1>Edit project</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

	<form method="POST" action="{{action('ProjectController@update', ['id' => $project->id])}}">
        @csrf
        @method('PUT')

		<div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Project Name') }}</label>

            <div class="col-md-auto">
                <input id="name" type="text" name="name" value="{{ old('name', $project->name) }} " required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-4 col-form-label text-md-right">{{ __('Project Description') }}</label>

            <div class="col-md-auto">
                <textarea id="description" name="description" rows="5" cols="50">{{ old('description', $project->description) }}</textarea>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>                             
            </div>
        </div>
	</form>
</div>
@endsection