<?php

namespace Database\Seeders;

use App\Models\proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Proveedor_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $proveedor=new proveedor();
        $proveedor->nombre_prov='Farmatodo';
        $proveedor->direccion_prov='Carrera 7 # 30b-139';
        $proveedor->nro_telefono_prov='(601)7469000';
        $proveedor->pag_web='https://www.farmatodo.com.co/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguerias Cafam';
        $proveedor->direccion_prov='Calle 38A Sur # 34D-51';
        $proveedor->nro_telefono_prov='(601)6505222';
        $proveedor->pag_web='https://www.drogueriascafam.com.co/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguerias Colsubsidio';
        $proveedor->direccion_prov='Carrera 8 # 49-25';
        $proveedor->nro_telefono_prov='(601)7450999';
        $proveedor->pag_web='https://www.drogueriascolsubsidio.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguerias La Rebaja';
        $proveedor->direccion_prov='Calle 13 # 7-14';
        $proveedor->nro_telefono_prov='(601)7560555';
        $proveedor->pag_web='https://www.larebajavirtual.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguerias Cruz Verde';
        $proveedor->direccion_prov='Calle 6a Calle 68 Sur, # 78A';
        $proveedor->nro_telefono_prov='(601)14430200';
        $proveedor->pag_web='https://www.cruzverde.com.co/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Drogueria Locatel';
        $proveedor->direccion_prov='Carrera 18 #17-28';
        $proveedor->nro_telefono_prov='(601) 4192525';
        $proveedor->pag_web='https://www.locatelcolombia.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguería La Economía';
        $proveedor->direccion_prov='Calle 16 #5-11';
        $proveedor->nro_telefono_prov='3157823477';
        $proveedor->pag_web='https://www.droguerialaeconomia.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Drogueria Premium';
        $proveedor->direccion_prov='Carrera 45 #78-90';
        $proveedor->nro_telefono_prov='321456789';
        $proveedor->pag_web='https://www.drogueriapremium.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguería Litxis';
        $proveedor->direccion_prov='Calle 58k Sur #31';
        $proveedor->nro_telefono_prov='(601) 7779359';
        $proveedor->pag_web='https://www.droguerialitix.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Drogueria JP';
        $proveedor->direccion_prov='Carrera 77c #61c Sur';
        $proveedor->nro_telefono_prov='(601)6542315';
        $proveedor->pag_web='https://www.drogueriajp.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguería Famidrogas Droxi';
        $proveedor->direccion_prov='Carrera 78 #12';
        $proveedor->nro_telefono_prov='(601)5612785';
        $proveedor->pag_web='https://www.DrogueríaFamidrogasDroxi.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Drogueria Dos Plus';
        $proveedor->direccion_prov='Calle 57g Sur';
        $proveedor->nro_telefono_prov='316548975';
        $proveedor->pag_web='https://www.DrogueriaDosPlus.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Drogueria la 46 sur';
        $proveedor->direccion_prov='Calle 46 Sur #82-07';
        $proveedor->nro_telefono_prov='(601)14504424';
        $proveedor->pag_web='https://www.drogueriala46.com/';
        $proveedor->save();

        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguería Confidrogas';
        $proveedor->direccion_prov='Carrera 79 #56-78';
        $proveedor->nro_telefono_prov='305412698';
        $proveedor->pag_web='https://www.DrogueríaConfidrogas.com/';
        $proveedor->save();

        
        $proveedor=new proveedor();
        $proveedor->nombre_prov='Drogueria Guerreros';
        $proveedor->direccion_prov='Calle 44 Sur #29 31';
        $proveedor->nro_telefono_prov='321 9283220';
        $proveedor->pag_web='https://www.drogueriaguerreros.com/';
        $proveedor->save();

        
        $proveedor=new proveedor();
        $proveedor->nombre_prov='Drogueria Farmaciel';
        $proveedor->direccion_prov='28 Sur, Calle 44 Sur #72';
        $proveedor->nro_telefono_prov='312564789';
        $proveedor->pag_web='https://www.drogueriafarmaciel.com/';
        $proveedor->save();

        
        $proveedor=new proveedor();
        $proveedor->nombre_prov='Drogueria Elohim';
        $proveedor->direccion_prov='Carrera 70b #731';
        $proveedor->nro_telefono_prov='(601) 14770537';
        $proveedor->pag_web='https://www.drogueriaElohim.com/';
        $proveedor->save();

        
        $proveedor=new proveedor();
        $proveedor->nombre_prov='Drogueria MPT';
        $proveedor->direccion_prov='Calle 46 Sur #80-08 ';
        $proveedor->nro_telefono_prov='300 5463216';
        $proveedor->pag_web='https://www.drogueriaMPT.com/';
        $proveedor->save();

        
        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguería Ferrol Drogas';
        $proveedor->direccion_prov='Diagonal 64 Bis Sur #48';
        $proveedor->nro_telefono_prov='317164638';
        $proveedor->pag_web='https://www.DrogueríaFerrolDrogas.com/';
        $proveedor->save();

        
        $proveedor=new proveedor();
        $proveedor->nombre_prov='Droguería Mendez';
        $proveedor->direccion_prov='Calle 65 Sur #85';
        $proveedor->nro_telefono_prov='3123217736';
        $proveedor->pag_web='https://www.DrogueríaMendez.com/';
        $proveedor->save();
        
}
}