@extends('layouts.plantilla2')

@section('title', 'Cursos create')

@section('content')

<h1>Formulario para crear un nuevo post</h1>
<form action="/cursos/{{$curso->id}}" method="POST">
    @csrf
    @method('PUT')
    <label>
        Titulo:
        <input type="text" name="title" value="{{$curso->title}}">
    </label>
    <br>
    <label> 
        Categoria:
        <input type="text" name="category" value="{{$curso->category}}">
    </label>
    
    <br>
    <label> 
        Contenido:
        <textarea name="content"> {{$curso->content}}</textarea>
    </label>
    <br>
    <button type="submit">
        Actualizar categoria
    </button>
</form>

@endsection


