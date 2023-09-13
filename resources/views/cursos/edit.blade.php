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
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>

        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>
            Categoría
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <button type="submit">
            Actualizar formulario
        </button>
    </form>
@endsection