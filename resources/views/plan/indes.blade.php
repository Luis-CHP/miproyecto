@extends('layouts.plantilla2')

@section('title', 'Cursos')

@section('content')

<h1>Bienvenido a la página principal de cursos</h1>
    <a href="/cursos/create">
        Nuevo curso
    </a>
    <ul>
    @foreach ($categorias as $categoria)
        <li>
            <a href= "/cursos/{{$categoria->id}}">
                {{ $categoria->title }}

            </a>
        </li>

    @endforeach
    </ul>
    <p>Aquí encontrarás una variedad de cursos para mejorar tus habilidades.</p>

    {{ $categorias->links() }}
@endsection
