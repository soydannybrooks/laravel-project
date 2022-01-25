<!--Blade es el motor de plantillas de Laravel-->
@extends('layout') <!--extends llama la plantilla que se le asigne en el nombre-->

{{-- @section('title')
    Home <!-- Se pasa el titulo con los espacios iniciales, para ello se usa el nombre como segunda variable de section-->
@endsection --}}

@section('title', 'Home')

<!-- Section abre y cierra el contenido que se le va a pasar a Yield en Layout.blade.php  -->
@section('content')
    <h1>Home</h1>
@endsection