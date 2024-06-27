<?php

namespace Database\Seeders;

use App\Models\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class producto_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $producto=new producto();
            $producto->nombre_pro='Acetaminofen';
            $producto->tipo_pro='1';
            $producto->precio_pro='800';
            $producto->cantidad_pro='2.450';
            $producto->save();
    
            $producto=new producto();
            $producto->nombre_pro='Amlodipino';
            $producto->tipo_pro='1';
            $producto->precio_pro='2.300';
            $producto->cantidad_pro='1.000';
            $producto->save();
    
            $producto=new producto();
            $producto->nombre_pro='Ibuprofeno';
            $producto->tipo_pro='1';
            $producto->precio_pro='700';
            $producto->cantidad_pro='1.200';
            $producto->save();
    
            $producto=new producto();
            $producto->nombre_pro='Nimesulide';
            $producto->tipo_pro='1';
            $producto->precio_pro='2.400';
            $producto->cantidad_pro='1.000';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Cetirizina';
            $producto->tipo_pro='1';
            $producto->precio_pro='2.000';
            $producto->cantidad_pro='1.000';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Losartan';
            $producto->tipo_pro='1';
            $producto->precio_pro='1.200';
            $producto->cantidad_pro='1.500';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Congestex';
            $producto->tipo_pro='1';
            $producto->precio_pro='5.300';
            $producto->cantidad_pro='1.300';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Rifaximina';
            $producto->tipo_pro='1';
            $producto->precio_pro='6.160';
            $producto->cantidad_pro='250';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Gaviscon';
            $producto->tipo_pro='1';
            $producto->precio_pro='7.500';
            $producto->cantidad_pro='1.600';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Atorvastatina';
            $producto->tipo_pro='1';
            $producto->precio_pro='11.300';
            $producto->cantidad_pro='1.800';
            $producto->save();
    
            $producto=new producto();
            $producto->nombre_pro='Vendaje Fijo';
            $producto->tipo_pro='2';
            $producto->precio_pro='3.600';
            $producto->cantidad_pro='1.700';
            $producto->save();
    
            $producto=new producto();
            $producto->nombre_pro='Gasa Esteril';
            $producto->tipo_pro='2';
            $producto->precio_pro='900';
            $producto->cantidad_pro='350';
            $producto->save();
    
            $producto=new producto();
            $producto->nombre_pro='Guantes quirurgicos';
            $producto->tipo_pro='2';
            $producto->precio_pro='500';
            $producto->cantidad_pro='1.000';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Tapabocas';
            $producto->tipo_pro='2';
            $producto->precio_pro='1.000';
            $producto->cantidad_pro='15.000';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Pastillero';
            $producto->tipo_pro='2';
            $producto->precio_pro='10.000';
            $producto->cantidad_pro='1.000';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Compresa Mediana';
            $producto->tipo_pro='2';
            $producto->precio_pro='15.400';
            $producto->cantidad_pro='1.200';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Micropore';
            $producto->tipo_pro='2';
            $producto->precio_pro='8.000';
            $producto->cantidad_pro='890';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Curas Impermedables';
            $producto->tipo_pro='2';
            $producto->precio_pro='1.400';
            $producto->cantidad_pro='123';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Agua Oxigenada';
            $producto->tipo_pro='2';
            $producto->precio_pro='12.600';
            $producto->cantidad_pro='2.000';
            $producto->save();

            $producto=new producto();
            $producto->nombre_pro='Isodine';
            $producto->tipo_pro='2';
            $producto->precio_pro='2.600';
            $producto->cantidad_pro='5.000';
            $producto->save();
        }
    }
}
