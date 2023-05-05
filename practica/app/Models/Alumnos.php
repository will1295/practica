<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table="tbl_alumnos";
    use HasFactory;
    protected $fillable=[
        'nombre',
        'apellido',
        'edad',
        'sexo'
    ];
    
}
