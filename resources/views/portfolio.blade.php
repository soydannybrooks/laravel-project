<!--Blade es el motor de plantillas de Laravel-->
@extends('layout') <!--extends llama la plantilla que se le asigne en el nombre-->

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        {{-- <?php foreach ($portfolio as $portfolioItem) {
            echo "<li>" . $portfolioItem['title'] . "</li>";
        } ?> Forma 1 PHP tradicional--}}

        {{-- <?php foreach ($portfolio as $portfolioItem): ?>
            <li>{{$portfolioItem['title']}}</li>
        <?php endforeach ?> Forma 2 PHP --}}

    {{-- @if ($portfolio) --}}
    {{-- @isset($portfolio) --}}
        @forelse ($portfolio as $portfolioItem)
            <li>{{$portfolioItem['title']}} <small>{{ $loop->last ? 'Es el último' : '' }}</small> </li>
        @empty  
            <li>No existen proyectos para mostrar</li>
        @endempty

    </ul>

@endsection