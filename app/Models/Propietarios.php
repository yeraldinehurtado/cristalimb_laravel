<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietarios extends Model
{
    use HasFactory;

    //Definimos tabla
    public $table="Propietarios";

    //definimos campos
    public $fillable=[
        "identificacion",
        "nombres",
        "apellidos",
        "telefono",
        "email",
        "direccion",
        "estado",
    ];
    //establecer reglas de validación
    public static $rules=[
        "identificacion" => 'required|min:0',
        "nombres" => 'required|string|min:2',
        "apellidos" => 'required|string|min:2',
        "telefono" => 'required|min:0',
        "email" => 'required|string|min:5',
        "direccion" => 'required|string|min:2',
        "estado" => 'in, 1,0',
    ];
}
