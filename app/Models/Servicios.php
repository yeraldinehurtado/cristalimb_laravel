<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    //Definimos tabla
    public $table="servicios";

    //definimos campos
    public $fillable=[
        "nombreServicio",
    ];
    
    public $timestamps = false;
    
}
