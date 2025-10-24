<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //el nombre de la tabla en la bd productos
    use HasFactory;
    protected $table="tbl_productos";
    protected $fillable=["nombre", "precio", "stock"];

}
