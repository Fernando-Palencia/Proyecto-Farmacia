<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_elementos;

class tipoelem_controller extends Controller
{
    public function principal_tipo(){

        $tipos=tipo_elementos::all();

         return view('Tipos/principal_tipo',compact('tipos'));

     }

     public function creacion_tipo(){

        return view('Tipos/creacion_tipo');

    }

    public function adicionar_tipo(Request $campos){

        $valor=new tipo_elementos();
        $valor->descrip_tipo=$campos->descrip_tip;
        $valor->save();

        return redirect('Tipos');
    }

    public function modificar_tipo($id){

        $tipo=tipo_elementos::find($id);

        return view('Tipos/actualizar_tipo', ['tipo'=>$tipo]);
    }

    public function actualizar_tipo(Request $request){
        
        $id=$request->id_tipo;

        $valor=tipo_elementos::find($id);
        $valor->descrip_tipo=$request->descrip_tip;

        $valor->save();

        return redirect('Tipos')->with('Categoria Ha Sido Modificado Correctamente....');
    }

    public function eliminar_tipo($id)
    {
        $tipo=tipo_elementos::find($id);
        $tipo->delete();

        return redirect('Tipos')->with('Categoria Ha Sido Eliminado Correctamente....');
    }
    
}
