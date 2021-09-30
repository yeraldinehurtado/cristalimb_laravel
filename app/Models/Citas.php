<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    //Definimos tabla
    public $table="Citas";

    //definimos campos
    public $fillable=[
        "identificacion",
        "nombres",
        "apellidos",
        "telefono",
        "email",
        "tipoServicio",
        "fechahoraCita",
    ];
    //establecer reglas de validación
    public static $rules=[
        "identificacion" => 'required|min:0',
        "nombres" => 'required|string|min:2',
        "apellidos" => 'required|string|min:2',
        "telefono" => 'required|min:0',
        "email" => 'required|string|min:5',
        "tipoServicio" => 'required|string|min:2',
        "fechahoraCita" => 'required|datetime|min:2',
    ];
}
