@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>En esta página podrás crear un curso</h1>


    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>

        <br>

        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>

        <br>

        <label>
            Categoría
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>

        <br>
        <button type="submit">
            Actualizar formulario
        </button>
    </form>
@endsection