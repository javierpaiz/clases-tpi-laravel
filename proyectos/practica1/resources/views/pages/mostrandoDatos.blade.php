@extends('pages.inicio')
@section('title', 'Vista')

@section('header')

    <h1>Mostrado datos desde post</h1>

@endsection

@section('content')

    <x-card-user nombre="{{ $nombre }}" descripcion="El usuario tiene {{ $edad }} años de edad">

    </x-card-user>

@endsection