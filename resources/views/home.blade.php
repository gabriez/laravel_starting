@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-7 col-12 mb-2 mb-lg-0">

            <h1 class="display-4 text-lg-start text-center text-primary">Desarrolla tu web</h1>


            <p class="lead text-secondary">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mollis nulla sit amet nunc congue, sit amet tempor mauris ornare. Donec a ligula pharetra, convallis arcu efficitur, lobortis tortor. Aliquam scelerisque nunc quis ligula scelerisque sollicitudin. Mauris mi ipsum, commodo quis molestie vel, lobortis eget magna. Nulla arcu odio, posuere at justo at, sagittis posuere turpis. Donec eget ligula eu diam tristique convallis. Duis quis metus nec augue tincidunt varius. Mauris vel felis varius, faucibus lacus et, varius sem.
            </p>
            <div class="button-group btn-group-lg mx-auto mx-lg-0" style="width: fit-content;">
                <a class="btn btn-primary" href="{{route('projects.index')}}">{{__('Portfolio')}}</a>
                <a class="btn btn-outline-primary" href="{{route('contact')}}">{{__('Contact')}}</a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-5 col-9 mx-auto">
            <img class="img-fluid rounded" src="/img/home.jpeg">
        </div>
    </div>
</div>

@endsection
