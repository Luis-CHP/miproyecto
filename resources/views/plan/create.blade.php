@extends('layouts.plantilla2')

@section('title', 'Cursos create')

@section('content')

<h1>Formulario para crear un nuevo post</h1>
<form action="/cursos" method="POST">
    @csrf
    <label>
        Titulo:
        <input type="text" name="title">
    </label>
    <br>
    <label> 
        Categoria:
        <input type="text" name="category">
    </label>
    
    <br>
    <label> 
        Contenido:
        <textarea name="content"></textarea>
    </label>
    <br>
    <button type="submit">
        crear curso
    </button>
</form>

@endsection

