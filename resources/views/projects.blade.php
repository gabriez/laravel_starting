@extends('layouts.app')

@section('title', '- Proyectos')


@section('content')


<div class="container">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1 class="display-4 mb-0"> Proyectos en los que participé </h1>
        @auth
            <a class="btn btn-primary" href={{route('projects.create')}} > Agrega un proyecto  </a>
        @endauth
    </div>
    <p class="lead text-secondary ms-1"> Lorem ipsum doler sit amet </p>
    <ul class="list-group">
        @forelse( $projects as $project )
            <li class="list-group-item py-3 mb-3 bg-white shadow-sm border-0">
                <a class="d-flex justify-content-between align-items-center text-decoration-none text-secondary" href="{{ route('projects.show', $project) }}">
                    <span class="font-weight-bold"> {{$project->title}} </span>
                    <span class="text-black-50"> {{$project->created_at->format('d/m/Y')}} </span>
                </a>
            </li>
        @empty
            <li class="list-group-item py-3 mb-3 bg-white shadow-sm border-0"> No hay proyectos </li>
        @endforelse

        <!-- recuerda la variable loop en los bucles  -->

    </ul>
     {{ $projects->links('pagination::bootstrap-4')}}

</div>
@endsection