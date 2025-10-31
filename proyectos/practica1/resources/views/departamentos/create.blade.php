    @extends('pages.inicio')
    @section('title','Create - Departamentos')


    @section('header')


    <h1>Titulo de la pagina</h1>


    @endsection


    @section('content')

    <form action="{{ route("departamentos.store") }}" method="post">
        @csrf
        <input type="text" name="nombreDepartamento">
        <button>enviar</button>
    </form>
    @endsection