@extends('layouts.app')

@section('title', 'Create projects')


@section('content')

<div class="container">
	<div class="row">
		<div class="mx-auto col-12 col-md-10 col-lg-6">
		<form method='POST' class="bg-white rounded shadow-sm py-3 px-4" action={{route('projects.store')}} >
			<h1 class="display-4">Agrega un proyecto</h1>

			<hr>

			@include('partials.forms-projects', ['btnText' => 'Guardar'])

		</form>
		</div>
	</div>
</div>
@endsection
