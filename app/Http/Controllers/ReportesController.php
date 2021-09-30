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

    public function listar1(){
        return view('Reportess.listar1');
    }

    public function listar2(){
        return view('Reportess.listar2');
    }

    

}