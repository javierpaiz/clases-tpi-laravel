<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    /** @use HasFactory<\Database\Factories\DepartamentosFactory> */
    use HasFactory;

    protected $table = "Departamentos";

    protected $fillable=["nombreDepartamento"];

    public function empleados(){
        return $this->hasMany(Empleados::class);
    }
}
