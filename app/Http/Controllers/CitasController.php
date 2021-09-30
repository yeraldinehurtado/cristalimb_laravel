<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Referencia a libreria para envio de mensajes
use Flash;
use PDF;
//Referencia al modelo de citas
use App\Models\Citas;
use DataTables;

class CitasController extends Controller
{
    //Se crea metodos de la clase
    public function index(){
        return view('Citas.index');
    }
    //metodo para consultar los datos y retornarlos al datatable
    public function listar(Request $request){
        //Consulto todas las Citas
        $citas = Citas::all();

        //retornamos el datatable
        return DataTables::of($citas)

        //Adicionamos una columna con la opción de editar
        ->addColumn('editar', function($citas){
        return '<a class="btn btn-primary bt-sm" href="/Citas/editar/'.$citas->id.'">Editar</a>';
        }) 
          
        //Utilizamos rawcolumns para representar contenido html
        ->rawColumns(['editar']) 
        ->make(true);
    }
    //metodo crear
    public function create(){
        return view('Citas.create');
    }
    //Método para guardar
    public function save(Request $request){
        //validamos
        $request->validate(Citas::$rules);
        //tomamos todos los valores que vienen de los campos
        $input=$request->all();
        try {
            //Guardamos los valores que vienen de los campos html o de valores asignados
            Citas::Create([
                "identificacion"=>$input["identificacion"],
                "nombres"=>$input["nombres"],
                "apellidos"=>$input["apellidos"],
                "telefono"=>$input["telefono"],
                "email"=>$input["email"],
                "tipoServicio"=>$input["tipoServicio"],
                "fechaCita"=>$input["fechaCita"],
            ]);
            //mensaje al registrar el cita
            Flash::success("Se registró la cita");
            //retorno a la vista
            return redirect("/Citas");
        }
        catch (Exception $e){
            //Si hay un error guardamos el mensaje de error de la excepción
            Flash::error($e->getMessage());
            //Retornamos a la vista de crear
            return redirect("/Citas/crear");
        }
    }
    
    //metodo para editar
    public function edit($id){
        //realiza la búsqueda a través del id
        $citas = Citas::find($id);
        //Evaluamos si no lo encuentra
        if ( $citas==null){
            //generamos un mensaje si no lo encuentra
            Flash::error("Cita no encontrada");
            //Retornamos a la vista 
            return redirect("/Citas");
        }
        //retorno a la vista con un array de variables
        return view("Citas.edit", compact("citas"));
        
    }
    //metodo para actualizar 
    public function update(Request $request){
        //validamos
        $request->validate(Citas::$rules);
        //tomamoos todos los valores que vienen de los campos
        $input=$request->all();
        try{
            //Realiza la búsqueda a través del id
            $citas = Citas::find($input['id']);
            //evaluamos si no lo encuentra
            if($citas==null){
                //generamos un mensaje si no se encuentra
                Flash::error("Cita no encontrada");
                //retornamos a la vista de propietario
                return redirect ("/Citas");
            }

            //guardamos los valoes que vienen de los campos html o de valores asignados
            $citas->update([
                "identificacion"=>$input["identificacion"],
                "nombres"=>$input["nombres"],
                "apellidos"=>$input["apellidos"],
                "telefono"=>$input["telefono"],
                "email"=>$input["email"],
                "tipoServicio"=>$input["tipoServicio"],
                "fechaCita"=>$input["fechaCita"],
            ]);
            //mensaje al modificar la cita
            Flash::success("Se modificó la cita");
            //retorno a la vista
            return redirect ("/Citas");
        }
        catch(\Exception $e){
            //Si hay error guardamos el mensaje de error de la excepción
            Flash::error($e->getMessage());
            //retornamos a la vista de crear
            return redirect("/Citas/crear");

        }
    }
    // creaos los metodos de la clase para cargar los parametros del informe 
    public function informe(){
        return view('Citas.informe');       
    }
    public function download(Request $request)
    {
        $input=$request->all();
        $citas=Citas::select("*")
        ->whereBetween('created_at', [$input["txtFechaInicial"],$input["txtFechaFinal"]])
        ->get();

        if (count ($citas) >0 ){
            $pdf=PDF::loadView('pdf.cita', compact("citas","input"));
            return $pdf->stream('archivo.pdf');
        }else{
            return redirect("Citas/index");
        }
    }
}

