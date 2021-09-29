<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Referencia a libreria para envio de mensajes
use Flash;
//Referencia al modelo de propietarios
use App\Models\Propietarios;
use DataTables;

class PropietariosController extends Controller
{
    //Se crea metodos de la clase
    public function index(){
        return view('Propietarios.index');
    }
    //metodo para consultar los datos y retornarlos al datatable
    public function listar(Request $request){
        //Consulto todos los Propietarios
        $propietarios = Propietarios::all();

        //retornamos el datatable
        return DataTables::of($propietarios)
        ->editColumn("estado", function($propietarios){
        return $propietarios->estado==1 ? "Activo" : "Inactivo";
        })
        //Adicionamos una columna con la opción de editar
        ->addColumn('editar', function($propietarios){
        return '<a class="btn btn-primary bt-sm" href="/Propietarios/editar/'.$propietarios->id.'">Editar</a>';
        }) 
        //Adicionamos una columna con la opción de Inactivar o Activar para colocar dos botones
        ->addColumn('cambiar', function($propietarios){
            if($propietarios->estado==1){
                return '<a class="btn btn-danger bt-sm" href="/Propietarios/cambiar/estado/'.$propietarios->id.'/0">Inactivar</a>';
            }else{
                return '<a class="btn btn-success bt-sm" href="/Propietarios/cambiar/estado/'.$propietarios->id.'/1">Activar</a>';
            }
        })  
        //Utilizamos rawcolumns para representar contenido html
        ->rawColumns(['editar','cambiar']) 
        ->make(true);
    }
    //metodo crear
    public function create(){
        return view('Propietarios.create');
    }
    //Método para guardar
    public function save(Request $request){
        //validamos
        $request->validate(Propietarios::$rules);
        //tomamos todos los valores que vienen de los campos
        $input=$request->all();
        try {
            //Guardamos los valores que vienen de los campos html o de valores asignados
            Propietarios::Create([
                "identificacion"=>$input["identificacion"],
                "nombres"=>$input["nombres"],
                "apellidos"=>$input["apellidos"],
                "telefono"=>$input["telefono"],
                "email"=>$input["email"],
                "direccion"=>$input["direccion"],
                "estado"=>1,
            ]);
            //mensaje al registrar el propietario
            Flash::success("Se registró el propietario");
            //retorno a la vista
            return redirect("/Propietarios");
        }
        catch (Exception $e){
            //Si hay un error guardamos el mensaje de error de la excepción
            Flash::error($e->getMessage());
            //Retornamos a la vista de crear
            return redirect("/Propietarios/crear");
        }
    }
    
    //metodo para editar
    public function edit($id){
        //realiza la búsqueda a través del id
        $propietarios = Propietarios::find($id);
        //Evaluamos si no lo encuentra
        if ( $propietarios==null){
            //generamos un mensaje si no lo encuentra
            Flash::error("Propietario no encontrado");
            //Retornamos a la vista 
            return redirect("/Propietarios");
        }
        //retorno a la vista con un array de variables
        return view("Propietarios.edit", compact("propietarios"));
        
    }
    //metodo para actualizar 
    public function update(Request $request){
        //validamos
        $request->validate(Propietarios::$rules);
        //tomamoos todos los valores que vienen de los campos
        $input=$request->all();
        try{
            //Realiza la búsqueda a través del id
            $propietarios = Propietarios::find($input['id']);
            //evaluamos si no lo encuentra
            if($propietarios==null){
                //generamos un mensaje si no se encuentra
                Flash::error("Propietario no encontrado");
                //retornamos a la vista de propietario
                return redirect ("/Propietarios");
            }

            //guardamos los valoes que vienen de los campos html o de valores asignados
            $propietarios->update([
                "identificacion"=>$input["identificacion"],
                "nombres"=>$input["nombres"],
                "apellidos"=>$input["apellidos"],
                "telefono"=>$input["telefono"],
                "email"=>$input["email"],
                "direccion"=>$input["direccion"],
            ]);
            //mensaje al modificar el propietario
            Flash::success("Se modificó el propietario");
            //retorno a la vista
            return redirect ("/Propietarios");
        }
        catch(\Exception $e){
            //Si hay error guardamos el mensaje de error de la excepción
            Flash::error($e->getMessage());
            //retornamos a la vista de crear
            return redirect("/Propietarios/crear");

        }
    }

    //creamos otro metodo para cambiar el estado
    
    public function updateState($id, $estado)
    {
        //realiza la búsqueda a través del id
        $propietarios = Propietarios::find($id);
        //Evaluamos si no lo encuentra
        if ( $propietarios==null){
            //generamos un mensaje si no se encuentra
            Flash::error("Propietario no encontrado");
            //Retornamos a la vista
            return redirect("/Propietarios");
        }
        try {
            //actualizamos el estado
            $propietarios->update(["estado"=>$estado]);
            //generamos el mensaje de actualización
            Flash::success("Se modificó el estado del propietario");
            //Retornamos a la vista
            return redirect("/Propietarios");
             }catch(\Exception $e){
             //Si hay error guardamos el mensaje de error de la excepción
             Flash::error($e->getMessage());
             //retorno a la vista de crear
             return redirect("/Propietarios");
        }
        
        
    }

}