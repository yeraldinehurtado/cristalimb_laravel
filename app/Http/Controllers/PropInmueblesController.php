<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Propietarios;
use App\Models\Inmuebles;
use App\Models\PropInmuebles;
use DataTables;
use DB;

class PropInmueblesController extends Controller
{
    //Creamos los métodos de la clase
    public function index(){
        $propietarios = Propietarios::all();
        $inmuebles = Inmuebles::all();
        //Retornamos utilizando compact, para retornar un array de variables con sus valores
        return view("PropInmuebles.index", compact("propietarios", "inmuebles"));
    }

    public function save(Request $request)
    {
        $propietarios = Propietarios::all();
        $inmuebles = Inmuebles::all();
        $input = $request->all();
        try {
            //Guardamos los valores que vienen de los campos html o de valores asignados
            DB::beginTransaction();
            $inmuebles = Inmuebles::Create([
                "codigo"=>$input["codigo"],
                "descripcion"=>$input["descripcion"],
                "tipo"=>$input["tipo"],
                "servicio"=>$input["servicio"],
                "valor"=>$input["valor"],
                "area"=>$input["area"],
                "zona"=>$input["zona"],
                "estado"=>1,
            ]);
            $propietarios = Propietarios::Create([
                "identificacion"=>$input["identificacion"],
                "nombres"=>$input["nombres"],
                "apellidos"=>$input["apellidos"],
                "telefono"=>$input["telefono"],
                "email"=>$input["email"],
                "direccion"=>$input["direccion"],
                "estado"=>1,
            ]);
            
            PropInmuebles::create([
                "inmueble_id"=>$inmuebles->id,
                "propietario_id"=>$propietarios->id,
                "tipo" => $inmuebles->tipo,
                "valor" => $inmuebles->valor
            ]);
            
            $ins = Propietarios::find($id);
            
            DB::commit();
            return redirect("/PropInmuebles/listar2")->with('status', '1');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect("/PropInmuebles/listar2")->with('status', $e->getMessage());
        }
    }
        

    



    public function show(Request $request){
        $propietarios = Propietarios::all();
        $inmuebles = Inmuebles::all();

        return DataTables::of($propietarios);

            $inmuebles = Inmuebles::select("inmuebles.*")
            ->join("propietarios_inmuebles", "inmuebles.id","=", "propietarios_inmuebles.inmueble_id")
            ->get();

            $propietarios = Propietarios::select("propietarios.*")
            ->join("propietarios_inmuebles", "propietarios.id","=", "propietarios_inmuebles.propietario_id")
            ->get();

        

        return view("PropInmuebles.show", compact("inmuebles", "propietarios"));

    }

   
}