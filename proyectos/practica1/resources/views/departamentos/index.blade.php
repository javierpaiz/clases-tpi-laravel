    @extends('pages.inicio')
    @section('title','Index - Departamentos')


    @section('header')


    <h1>Titulo de la pagina</h1>


    @endsection


    @section('content')

    <h1>
        Index departamentos
    </h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <th>id</th>
                        <th>Nombre</th>
                        </thead>
                        <tbody>
                            @foreach ($dataDepartamentos as $itemDepartamento)
                            <tr>
                                <td>{{ $itemDepartamento->id }}</td>
                                <td>{{ $itemDepartamento->nombreDepartamento }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>

                </div>

            </div>

        </div>

    </div>

    @endsection