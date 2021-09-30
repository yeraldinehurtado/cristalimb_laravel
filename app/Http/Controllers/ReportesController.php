<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Referencia a libreria para envio de mensajes
use Flash;

use App\Models\Reportes;
use DataTables;

class ReportesController extends Controller
{
    //Se crea metodos de la clase
    public function index(){
        return view('Reportess.index');
    }

    public function lista1(){
        return view('Reportess.lista1');
    }

    public function lista2(){
        return view('Reportess.lista2');
    }

    

}