<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Referencia a libreria para envio de mensajes
use Flash;

use App\Models\Usuarios;
use DataTables;

class UsuariosController extends Controller
{
    //Se crea metodos de la clase
    public function index(){
        return view('Usuarios.index');
    }

    //metodo crear
    public function create(){
        return view('Usuarios.create');
    }
    //Método para guardar
    
    
    //metodo para editar
    public function edit(){
        
        return view("Usuarios.edit");
        
    }
    //metodo para actualizar 
    

}