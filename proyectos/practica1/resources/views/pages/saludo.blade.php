@extends('pages.inicio')
@section('title','Saludo')

@section('header')

<h1>Saludando</h1>

@endsection

@section('content')

<x-alert tipoAlerta="alert-primary">
    <p>Hola, {{ $nombre }}</p>
</x-alert>

@endsection