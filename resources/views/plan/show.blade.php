@extends('layouts.plantilla2')

@section('title', 'Cursos')

@section('content')

<a href="/cursos">Volver a cursos</a>
<h1>Titulo: {{$curso->title}}</h1>

<p>

    <b> categoria:</b> {{$curso->category}}
</p>

<p>
    {{$curso->content }}
</p>

<a href="/cursos/{{$curso->id}}/edit">Editar
</a>

<form action="/cursos/{{$curso->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">
        Eliminar categoria
    </button>
</form>

@endsection


