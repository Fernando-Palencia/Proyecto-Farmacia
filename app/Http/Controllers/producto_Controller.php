<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\tipo_elementos;
use Illuminate\Http\Request;


class producto_Controller extends Controller
{
    public function principal_prod(){

        $productos=producto::all();
        $tipos=tipo_elementos::all();

        return view('Producto/principal_prod',['productos'=>$productos], ['tipos'=>$tipos]);

     }

     public function creacion_prod(){

        return view('Producto/creacion_prod');

    }

     public function adicionar_prod(Request $campos){

        $valor=new producto();
        $valor->nombre_pro=$campos->nombre_prod;
        $valor->tipo_pro=$campos->id_prod;
        $valor->precio_pro=$campos->precio;
        $valor->cantidad_pro=$campos->cantidad;

        $valor->save();

        return redirect('Producto');
    }

    public function modificar_prod($id){

        $producto=producto::find($id);

        return view('Producto/actualizar_prod', ['Producto'=>$producto]);
    }

    public function actualizar_prod(Request $request){
        
        $id=$request->id_producto;

        $valor=producto::find($id);
        $valor->nombre_pro=$request->nombre_prod;
        $valor->tipo_pro=$request->id_prod;
        $valor->precio_pro=$request->precios_prod;
        $valor->cantidad_pro=$request->cantidades_prod;

        $valor->save();

        return redirect('Producto')->with('Producto Ha Sido Modificado Correctamente....');
    }

    public function eliminar_prod($id)
    {
        $producto=producto::find($id);
        $producto->delete();

        return redirect('Producto')->with('Producto Ha Sido Eliminado Correctamente....');
    }
}
