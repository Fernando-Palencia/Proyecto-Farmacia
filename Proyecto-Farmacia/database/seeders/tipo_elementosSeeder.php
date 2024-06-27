<?php

namespace Database\Seeders;

use App\Models\tipo_elementos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class tipo_elementosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $elem=new tipo_elementos();
        $elem->descrip_tipo=('medicamentos');
        $elem->save();

        $elem=new tipo_elementos();
        $elem->descrip_tipo=('Suministros');
        $elem->save();

        $elem=new tipo_elementos();
        $elem->descrip_tipo=('Imagenes');
        $elem->save();
        }


}
