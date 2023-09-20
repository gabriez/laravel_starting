
		{{-- @include('partials.validation-errors') --}}
		@csrf

		<div class="mb-3">
			<label for='title'>Titulo del proyecto</label>
			<input id='title' type="text" class="form-control @error('title') is-invalid @else border-0 @enderror" name="title" value="{{old('title', $project->title)}}">
			@error('title')
				<span class="invalid-feedback">
					<strong> {{$message}} </strong>
				</span>
			@enderror
		</div>

		<div class="mb-3">
			<label for='url'>URL que desea usar</label>
			<input id='url' type="text" class="form-control @error('url') is-invalid @else border-0 @enderror" name="url" value="{{old('url', $project->url)}}">
			@error('url')
				<span class="invalid-feedback">
					<strong> {{$message}} </strong>
				</span>
			@enderror

		</div>

		<div class="mb-3">
			<label for='description'>Descripción</label>
			<textarea id='description' class="form-control @error('description') is-invalid @else border-0 @enderror" type="text" name="description"> {{ old('description', $project->description)}}</textarea>
			@error('description')
				<span class="invalid-feedback">
					<strong> {{$message}} </strong>
				</span>
			@enderror
		</div>

		<button class="btn btn-primary" type="submit">{{ $btnText }}</button>
		<a class="btn btn-link" href="{{route('projects.index')}}">Regresa</a>