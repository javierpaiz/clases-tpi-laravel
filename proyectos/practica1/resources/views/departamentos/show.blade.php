    @extends('pages.inicio')
        @section('title','Show - Departamentos')


        @section('header')


        <h1>Titulo de la pagina</h1>


        @endsection


        @section('content')
        <x-card-user nombre="Hector Javier Paiz" descripcion="Ingeniero de sistemas informaticos">
            Infor del usuario
        </x-card-user>


        <x-alert tipoAlerta="alert-primary">
            <p>Esta es una informacion</p>
        </x-alert>
        <x-alert tipoAlerta="alert-danger">
            <p>Esto es un error</p>
        </x-alert>
    @endsection