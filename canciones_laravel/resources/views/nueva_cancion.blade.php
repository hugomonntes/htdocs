@extends('principal')
@section('titulo', 'Formulario Nuevas Canciones')
@section('contenido')
    <h1>Formulario de Nueva Cancion</h1>
    <form action="{{ route('agregarCancion') }}" method="post">
        @csrf
        <input type="text" name="titulo" id="titulo">
        <input type="text" name="album" id="album">
        <input type="text" name="grupo" id="grupo">
        <input type="number" name="anio" id="anio">
        <input type="submit" value="Enviar">
    </form>
@endsection