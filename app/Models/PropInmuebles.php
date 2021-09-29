<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropInmuebles extends Model
{
    use HasFactory;

    //Definimos tabla
    public $table="propietarios_inmuebles";

    //definimos campos
    public $fillable=[
        "propietario_id",
        "inmueble_id",
        "tipo",
        "valor",
    ];
    
    public $timestamps = false;
    
}
