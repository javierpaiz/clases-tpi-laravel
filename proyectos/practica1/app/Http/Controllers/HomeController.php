<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.inicio');
    }
    public function mensaje($nombre)
    {
        return view('pages.saludo', ['nombre' => $nombre]);
    }

    public function mostrarFormulario()
    {
        return view('pages.formulario');
    }
    public function recibirFormulario(Request $request)
    {
        return view('pages.mostrandoDatos', [
            'nombre' => $request->nombre,
            'edad' => $request->edad
        ]);
    }
}
