@extends('layouts.plantilla')

@section('title', 'Actualizar Curso')

@section('content')
<h1>En esta página podrás actualizar un curso</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf
    @method('put')
    <label >
        Nombre:
        <br>
    <input type="text" name="name" value="{{$curso->name}}">
    </label>
<br>
    <label>
        Descripcion:
        <br>
        <textarea name="description" rows="5" >{{$curso->description}}</textarea>
    </label>
<br>
    <label>
        Categoria: 
        <br>
        <input type="text" name="category" value="{{$curso->category}}">
    </label>
    <br>
    <button type="submit">Actualizar Formulario</button>
</form>
@endsection