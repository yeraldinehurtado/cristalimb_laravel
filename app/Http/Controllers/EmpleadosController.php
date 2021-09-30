<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Referencia a libreria para envio de mensajes
use Flash;

use App\Models\Empleados;
use DataTables;

class EmpleadosController extends Controller
{
    //Se crea metodos de la clase
    public function index(){
        return view('Empleados.index');
    }

    //metodo crear
    public function create(){
        return view('Empleados.create');
    }
    //Método para guardar
    
    
    //metodo para editar
    public function edit(){
        
        return view("Empleados.edit");
        
    }
    //metodo para actualizar 
    

}