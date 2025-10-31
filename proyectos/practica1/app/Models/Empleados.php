<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadosFactory> */
    use HasFactory;

    protected $table = "Empleados";
    protected $fillable =["nombreEmpleado", "correoEmpleado", "departamento_id"];

    public function departamentos(){
        return $this->belongsTo(Departamentos::class);
    }
}
