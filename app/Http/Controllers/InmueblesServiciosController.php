<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Servicios;
use App\Models\Inmuebles;
use App\Models\InmueblesServicios;
use DataTables;
use DB;

class InmueblesServiciosController extends Controller
{
    //Creamos los métodos de la clase
    public function index(){
        $servicios = Servicios::all();
        //Retornamos utilizando compact, para retornar un array de variables con sus valores
        return view("InmueblesServicios.index", compact("servicios"));
    }

    public function save(Request $request)
    {

        $input = $request->all();
        try {
            DB::beginTransaction();
            $inmuebles = Inmuebles::create([
                "codigo"=>$input["codigo"],
                "descripcion"=>$input["descripcion"],
                "tipo"=>$input["tipo"],
                "servicio"=>$input["servicio"],
                "valor"=>$input["valor"],
                "area"=>$input["area"],
                "zona"=>$input["zona"],
                "estado"=>1,
            ]);

            foreach($input["servicio_id"] as $key => $value){
                InmueblesServicios::create([
                    "inmueble_id"=>$inmuebles->id,
                    "servicio_id"=>$value,
                    "nombreServicio" => $input["nombreServicio"]
                ]);

                $ins = Servicio::find($value);
            }
            
            DB::commit();
            return redirect("/Inmuebles/listar2")->with('status', '1');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect("/Inmuebles/listar2")->with('status', $e->getMessage());
        }
    }


    public function show(Request $request){
        $id = $request->input("id");
        $servicios=[];
        if ($id != null){
            $servicios = Servicios::select("servicios.*")
            ->join("inmuebles_servicios", "servicios.id","=", "inmuebles_servicios.servicio_id")
            ->where("inmuebles_servicios.servicio_id", $id)
            ->get();
        }

        $inmuebles = Inmuebles::select("inmuebles.*")
        ->get();

        return view("InmueblesServicios.show", compact("inmuebles", "servicios"));

    }

   
}
