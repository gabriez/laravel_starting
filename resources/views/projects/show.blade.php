@extends ('layouts.app')

@section('title', $project -> title)

@section ('content')

<div class="container">
	<div class="bg-white shadow-sm py-3 px-4 rounded">
	<h1 class="display-2"> {{$project->title}} </h1>
	<p class="lead text-secondary"> {{$project->description}} </p>



	<hr class="mb-1">
	<span class=" text-secondary text-end d-block text-"> {{$project -> created_at -> diffForHumans()}} </span>

		<div class="d-flex justify-content-between align-items-center mt-3">
			<a href="{{route('projects.index')}}">Regresar</a>

			@auth
				<div class="button-group btn-group-md d-flex gap-2">
					<a class="btn btn-primary" href="{{route('projects.edit', $project)}}"> Edita tu proyecto </a>
					<a class="btn btn-danger" onclick="e.preventDefault(); document.getElementById('formDelete').submit()"> Eliminar</a>
				</div>
				<form method="POST" id="formDelete" class="d-none" action=" {{route('projects.destroy', $project)}} ">
						@csrf @method('DELETE')
				</form>
			@endauth
		</div>
	</div>
</div>
@endsection