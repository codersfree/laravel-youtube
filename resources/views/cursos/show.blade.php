@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso de {{$curso->name}} </h1>

    <a href="{{route('cursos.index')}}">
        Volver a cursos
    </a>

    <br>

    <a href="{{route('cursos.edit', $curso)}}">
        Editar curso
    </a>

    <p>
        <strong>Categoría: </strong> {{$curso->categoria}}
    </p>

    <p>
        {{$curso->descripcion}}
    </p>
@endsection