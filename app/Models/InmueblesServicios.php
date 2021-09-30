<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InmueblesServicios extends Model
{
    use HasFactory;

    //Definimos tabla
    public $table="inmuebles_servicios";

    //definimos campos
    public $fillable=[
        "inmueble_id",
        "servicio_id",
        "nombreServicio",
    ];
    
    public $timestamps = false;
    
}
