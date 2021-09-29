<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Referencia a libreria para envio de mensajes
use Flash;
//Referencia al modelo de inmuebles
use App\Models\Inmuebles;
use DataTables;

class InmueblesController extends Controller
{
    //Se crea metodos de la clase
    public function index(){
        return view('Inmuebles.index');
    }
    //metodo para consultar los datos y retornarlos al datatable
    public function listar(Request $request){
        //Consulto todos los Inmuebles
        $inmuebles = Inmuebles::all();

        //retornamos el datatable
        return DataTables::of($inmuebles)
        ->editColumn("estado", function($inmuebles){
        return $inmuebles->estado==1 ? "Activo" : "Inactivo";
        })
        //Adicionamos una columna con la opción de editar
        ->addColumn('editar', function($inmuebles){
        return '<a class="btn btn-primary bt-sm" href="/Inmuebles/editar/'.$inmuebles->id.'">Editar</a>';
        }) 
        //Adicionamos una columna con la opción de Inactivar o Activar para colocar dos botones
        ->addColumn('cambiar', function($inmuebles){
            if($inmuebles->estado==1){
                return '<a class="btn btn-danger bt-sm" href="/Inmuebles/cambiar/estado/'.$inmuebles->id.'/0">Inactivar</a>';
            }else{
                return '<a class="btn btn-success bt-sm" href="/Inmuebles/cambiar/estado/'.$inmuebles->id.'/1">Activar</a>';
            }
        })  
        //Utilizamos rawcolumns para representar contenido html
        ->rawColumns(['editar','cambiar']) 
        ->make(true);
    }
    //metodo crear
    public function create(){
        return view('Inmuebles.create');
    }
    //Método para guardar
    public function save(Request $request){
        //validamos
        $request->validate(Inmuebles::$rules);
        //tomamos todos los valores que vienen de los campos
        $input=$request->all();
        try {
            //Guardamos los valores que vienen de los campos html o de valores asignados
            Inmuebles::Create([
                "codigo"=>$input["codigo"],
                "descripcion"=>$input["descripcion"],
                "tipo"=>$input["tipo"],
                "servicio"=>$input["servicio"],
                "valor"=>$input["valor"],
                "area"=>$input["area"],
                "zona"=>$input["zona"],
                "estado"=>1,
            ]);
            //mensaje al registrar el Inmueble
            Flash::success("Se registró el Inmueble");
            //retorno a la vista
            return redirect("/Inmuebles");
        }
        catch (Exception $e){
            //Si hay un error guardamos el mensaje de error de la excepción
            Flash::error($e->getMessage());
            //Retornamos a la vista de crear
            return redirect("/Inmuebles/crear");
        }
    }
    
    //metodo para editar
    public function edit($id){
        //realiza la búsqueda a través del id
        $inmuebles = Inmuebles::find($id);
        //Evaluamos si no lo encuentra
        if ( $inmuebles==null){
            //generamos un mensaje si no lo encuentra
            Flash::error("Inmueble no encontrado");
            //Retornamos a la vista 
            return redirect("/Inmuebles");
        }
        //retorno a la vista con un array de variables
        return view("Inmuebles.edit", compact("inmuebles"));
        
    }
    //metodo para actualizar 
    public function update(Request $request){
        //validamos
        $request->validate(Inmuebles::$rules);
        //tomamoos todos los valores que vienen de los campos
        $input=$request->all();
        try{
            //Realiza la búsqueda a través del id
            $inmuebles = Inmuebles::find($input['id']);
            //evaluamos si no lo encuentra
            if($inmuebles==null){
                //generamos un mensaje si no se encuentra
                Flash::error("Inmueble no encontrado");
                //retornamos a la vista de Inmueble
                return redirect ("/Inmuebles");
            }

            //guardamos los valoes que vienen de los campos html o de valores asignados
            $inmuebles->update([
                "codigo"=>$input["codigo"],
                "descripcion"=>$input["descripcion"],
                "tipo"=>$input["tipo"],
                "servicio"=>$input["servicio"],
                "valor"=>$input["valor"],
                "area"=>$input["area"],
                "zona"=>$input["zona"],
            ]);
            //mensaje al modificar el inmueble
            Flash::success("Se modificó el inmueble");
            //retorno a la vista
            return redirect ("/Inmuebles");
        }
        catch(\Exception $e){
            //Si hay error guardamos el mensaje de error de la excepción
            Flash::error($e->getMessage());
            //retornamos a la vista de crear
            return redirect("/Inmuebles/crear");

        }
    }

    //creamos otro metodo para cambiar el estado
    
    public function updateState($id, $estado)
    {
        //realiza la búsqueda a través del id
        $inmuebles = Inmuebles::find($id);
        //Evaluamos si no lo encuentra
        if ( $inmuebles==null){
            //generamos un mensaje si no se encuentra
            Flash::error("Inmueble no encontrado");
            //Retornamos a la vista
            return redirect("/Inmuebles");
        }
        try {
            //actualizamos el estado
            $inmuebles->update(["estado"=>$estado]);
            //generamos el mensaje de actualización
            Flash::success("Se modificó el estado del inmueble");
            //Retornamos a la vista
            return redirect("/Inmuebles");
             }catch(\Exception $e){
             //Si hay error guardamos el mensaje de error de la excepción
             Flash::error($e->getMessage());
             //retorno a la vista de crear
             return redirect("/Inmuebles");
        }
        
        
    }

}
