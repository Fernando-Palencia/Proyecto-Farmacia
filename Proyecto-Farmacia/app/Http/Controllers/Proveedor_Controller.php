<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedor;
use Database\Seeders\Proveedor_Seeder;

class Proveedor_Controller extends Controller
{
    public function principal_prov(){

        $proveedores=proveedor::all();

        return view('Proveedores/principal_prov', compact('proveedores'));
    }

    public function creacion_prov(){
        
        return view('Proveedores/creacion_prov');
    }

    public function adicionar_prov(Request $campos){

        $valor=new proveedor();
        $valor->nombre=$campos->nombre_prov;
        $valor->direccion=$campos->direccion_prov;
        $valor->nro_telefono=$campos->nro_telefono_prov;
        $valor->pag_web=$campos->pag_web;
        $valor->save();

        return redirect('Proveedor');
    }

    public function modificar_prov($id){

        $proveedor=proveedor::find($id);
        return view('Proveedor/actualizar_prov', ['Proveedor'=>$proveedor]);
    }

    public function actualizar_prov(Request $request){

        $id=$request->id_proveedor;
        $valor=proveedor::find($id);
        $valor->nombre=$request->nombre_prov;
        $valor->direccion=$request->direccion_prov;
        $valor->nro_telefono=$request->nro_telefono_prov;
        $valor->pag_web=$request->pag_web;

        $valor->save();

        return redirect('Proveedor')->with('Proveedor fue modificado correctamente...');
    }

    public function eliminar_prov($id){

        $proveedor=proveedor::find($id);
        $proveedor->delete();

        return redirect('Proveedor')->with('Proveedor fue eliminado correctamente...');
    }
}
