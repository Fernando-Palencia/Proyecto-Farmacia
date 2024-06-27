<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class cliente_Controller extends Controller
{
    public function principal_cli(){

        $clientes=cliente::all();
 
        return view('Cliente/principal_cli',compact('clientes'));
 
     }

     public function creacion_cli(){

        return view('Cliente/creacion_cli');

    }

    public function adicionar_cli(Request $campos){

        $valor=new cliente();
        $valor->nombre_cli=$campos->nombre_cli;
        $valor->direccion_cli=$campos->direccion_cli;
        $valor->nro_telefono_cli=$campos->telefono_cli;
        $valor->correo_cli=$campos->correo_cli;
        $valor->imagen_cli=$campos->nombre_archivo;

        if($campos->hasfile('nombre_archivo')){

            $nombre_archivo=$campos->file('nombre_archivo');
            $nombre_img=Str::slug($campos->nombre_archivo).".".$nombre_archivo->guessExtension();
            $ruta=public_path('img/imagenes');
            $nombre_archivo->move($ruta, $nombre_img);
            $campos->$nombre_archivo=$nombre_img;

        }

        $valor->save();

        return redirect('Cliente');
    }

    public function modificar_cli($id){

        $cliente=cliente::find($id);

        return view('Cliente/actualizar_cli', ['cliente'=>$cliente]);
    }

    public function actualizar_cli(Request $request)
    {
        $id=$request->id_cliente;

        $valor=cliente::find($id);
        $valor->nombre_cli=$request->nombre_cli;
        $valor->direccion_cli=$request->direccion_cli;
        $valor->nro_telefono_cli=$request->telefono_cli;
        $valor->correo_cli=$request->correo_cli;
        $valor->imagen_cli=$request->nombre_archivo;

         if($request->hasfile('nombre_archivo')){

            $nombre_archivo=$request->file('nombre_archivo');
            $nombre_img=Str::slug($request->nombre_archivo).".".$nombre_archivo->guessExtension();
            $ruta=public_path('img/imagenes');
            $nombre_archivo->move($ruta, $nombre_img);
            $request->$nombre_archivo=$nombre_img;

        }

        $valor->save();

        return redirect('Cliente');
    }

    public function eliminar_cli($id)
    {
        $cliente=cliente::find($id);
        $cliente->delete();

        return redirect('Cliente')->with('Cliente Ha Sido Eliminado Correctamente....');
    }
}
