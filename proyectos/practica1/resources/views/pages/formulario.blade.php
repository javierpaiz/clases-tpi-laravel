@extends('pages.inicio')
@section('title', 'Formulario')

@section('header')

    <h1>Saludando</h1>

@endsection

@section('content')

    <form action="{{ route('recibeForm') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Inserte el nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="">Inserte la edad</label>
            <input class="form-control" type="text" name="edad">
        </div>
        <button class="btn btn-success">Enviar</button>
    </form>

@endsection
