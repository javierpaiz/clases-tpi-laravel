<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriasFactory> */
    use HasFactory;
    protected $table = "Categorias";

    protected $fillable=["descripcion"];
}
