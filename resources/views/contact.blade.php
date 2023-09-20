@extends('layouts.app')



@section('content')

<div class="container ">
	<div class="row">
		<div class="mx-auto col-12 col-sm-10 col-lg-6">

		<form method="POST" class="bg-white shadow-sm py-3 px-4 rounded" action={{route('contact')}} >
			<h1 class="display-3">{{__('Contact')}}</h1>
			<hr>
			@csrf

			<div class="mb-3">
				<label for="name">Name</label>
				<input class="form-control @error('name') is-invalid @else border-0 @enderror" type="text" name="name" id="name" value="{{ old('name')}}" placeholder="Introduce tu nombre aquí">
				@error('name')
					<span class="invalid-feedback">
						<strong> {{ $message }} </strong>
					</span>
				@enderror
			</div>

			<div class="mb-3">
				<label for="lastname">Lastname</label>
				<input class="form-control @error('lastname') is-invalid @else border-0 @enderror" type="text" name="lastname" id="lastname" value="{{ old('lastname')}}" placeholder="Introduce tu apellido aquí">
				@error('lastname')
					<span class="invalid-feedback">
						<strong> {{ $message }} </strong>
					</span>
				@enderror
			</div>

			<div class="mb-3">
				<label for="email">Email</label>
				<input class="form-control @error('email') is-invalid @else border-0 @enderror" type="text" name="email" id="email" value="{{ old('email')}}" placeholder="Introduce tu email aquí">
				@error('email')
					<span class="invalid-feedback">
						<strong> {{ $message }} </strong>
					</span>
				@enderror
			</div>

			<div class="mb-3">
				<label for="description">Description</label>
				<textarea class="form-control @error('description') is-invalid @else border-0 @enderror" name="description" id="description" placeholder="Introduce el mensaje que deseas enviar">
				{{ old('description')}}
			</textarea>
			@error('description')
					<span class="invalid-feedback">
						<strong> {{ $message }} </strong>
					</span>
			@enderror
			</div>

			<button type="submit" class="btn btn-primary"> Send </button>

		</form>
		</div>
	</div>
</div>

@endsection