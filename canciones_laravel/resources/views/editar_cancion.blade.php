@extends('principal')
@section('titulo','Formulario de nuevas canciones')
@section('contenido')
    <h1>Formulario de edicion</h1>
    <form action="{{ route('guardarCambios') }}" method="post">
        @csrf{{-- CrossSite Request Forgery --}}
        <input type="text" name="titulo" id="titulo" placeholder="Titulo">
        <br><br>
        <input type="text" name="album" id="album" placeholder="Album">
        <br><br>
        <input type="text" name="grupo" id="grupo" placeholder="Grupo">
        <br><br>
        <input type="number" name="anio" id="anio" placeholder="Año">
        <br><br>
        <input type="submit" value="Guardar">
    </form>
@endsection