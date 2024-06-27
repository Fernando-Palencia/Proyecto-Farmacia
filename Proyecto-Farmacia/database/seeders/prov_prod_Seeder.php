<?php

namespace Database\Seeders;

use App\Models\prov_prod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class prov_prod_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pp=new prov_prod();
        $pp->id_proveedor='20';
        $pp->id_producto='1';

        $pp=new prov_prod();
        $pp->id_proveedor='19';
        $pp->id_producto='2';

        $pp=new prov_prod();
        $pp->id_proveedor='15';
        $pp->id_producto='3';

        $pp=new prov_prod();
        $pp->id_proveedor='12';
        $pp->id_producto='4';

        $pp=new prov_prod();
        $pp->id_proveedor='10';
        $pp->id_producto='5';

        $pp=new prov_prod();
        $pp->id_proveedor='1';
        $pp->id_producto='6';

        $pp=new prov_prod();
        $pp->id_proveedor='4';
        $pp->id_producto='7';

        $pp=new prov_prod();
        $pp->id_proveedor='3';
        $pp->id_producto='8';

        $pp=new prov_prod();
        $pp->id_proveedor='9';
        $pp->id_producto='9';

        $pp=new prov_prod();
        $pp->id_proveedor='14';
        $pp->id_producto='10';

        $pp=new prov_prod();
        $pp->id_proveedor='2';
        $pp->id_producto='11';

        $pp=new prov_prod();
        $pp->id_proveedor='8';
        $pp->id_producto='12';

        $pp=new prov_prod();
        $pp->id_proveedor='16';
        $pp->id_producto='13';

        $pp=new prov_prod();
        $pp->id_proveedor='17';
        $pp->id_producto='14';

        $pp=new prov_prod();
        $pp->id_proveedor='13';
        $pp->id_producto='15';

        $pp=new prov_prod();
        $pp->id_proveedor='6';
        $pp->id_producto='16';

        $pp=new prov_prod();
        $pp->id_proveedor='5';
        $pp->id_producto='17';

        $pp=new prov_prod();
        $pp->id_proveedor='11';
        $pp->id_producto='18';

        $pp=new prov_prod();
        $pp->id_proveedor='7';
        $pp->id_producto='19';

        $pp=new prov_prod();
        $pp->id_proveedor='18z|';
        $pp->id_producto='20';

    }
}
