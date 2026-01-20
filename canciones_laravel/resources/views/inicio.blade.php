@extends('principal')
@section('titulo', 'Todas las canciones')
@section('contenido')
@if(session('mensaje'))
    <h3 style="color: aqua;">{{ session('mensaje') }}</h3>
@endif
    <h1>Todas las canciones</h1>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Album</th>
                <th>Grupo</th>
                <th>Año</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($canciones as $cancion)
                <tr>
                    <td>{{ $cancion->titulo }}</td>
                    <td>{{ $cancion->album }}</td>
                    <td>{{ $cancion->grupo }}</td>
                    <td>{{ $cancion->anio }}</td>
                    <td>{{ $cancion->grupo }}</td>
                    <td><a href="{{ route('editarCancion', ['id'=>$cancion->id]) }}">Editar</a></td>
                    <td><a href="{{ route('eliminar_cancion', ['id'=>$cancion->id]) }}">Borrar</a></td> 
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection