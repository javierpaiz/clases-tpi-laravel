@extends('pages.inicio')
@section('title','Mi perfil')

@section('header')

<h1>Titulo de la pagina</h1>

@endsection

@section('content')
<x-card-user nombre="Hector Javier Paiz" descripcion="Ingeniero de sistemas informaticos">
    Infor del usuario
</x-card-user>
@endsection