@extends('layouts.app')

@section('content')
<div class="container">

	<h1>Edit student</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

	<form method="POST" action="{{action('StudentController@update', ['id' => $student->id])}}">
        @csrf
        @method('PUT')

		<div class="form-group row">
            <label for="first_name" class="col-sm-4 col-form-label text-md-right">{{ __('First Name') }}</label>

            <div class="col-md-6">
                <input id="first_name" type="text" name="first_name" value="{{ old('first_name', $student->first_name) }} " required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="last_name" class="col-sm-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

            <div class="col-md-6">
                <input id="last_name" type="text" name="last_name" value="{{ old('last_name', $student->last_name) }}" required autofocus>
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