<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataDepartamentos = Departamentos::all();
        return view("departamentos.index", ["dataDepartamentos"=>$dataDepartamentos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("departamentos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $departamento = new Departamentos();
        $departamento->nombreDepartamento = $request->nombreDepartamento;
        $departamento->save();

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
