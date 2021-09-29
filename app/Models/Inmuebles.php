<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmuebles extends Model
{
    use HasFactory;

    //Definimos tabla
    public $table="Inmuebles";

    //definimos campos
    public $fillable=[
        "codigo",
        "descripcion",
        "tipo",
        "servicio",
        "valor",
        "area",
        "zona",
        "estado",
    ];
    //establecer reglas de validación
    public static $rules=[
        "codigo" => 'required|min:0',
        "descripcion" => 'required|string|min:2',
        "tipo" => 'required|string|min:2',
        "servicio" => 'required|min:0',
        "valor" => 'required|string|min:5',
        "area" => 'required|string|min:2',
        "zona" => 'required|string|min:2',
        "estado" => 'in, 1,0',
    ];
}
