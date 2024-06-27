<?php

namespace Database\Seeders;

use Database\Factories\Proveedor_Factory;
use Illuminate\Database\Seeder;
use App\Models\proveedor;
use App\Models\producto;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     *
     */
    public function run(): void
    {
        $this->call([Proveedor_Seeder::class]);
        $this->call([tipo_elementosSeeder::class]);
        $this->call([producto_Seeder::class]);
        $this->call([prov_prod_Seeder::class]);

        proveedor::factory(50)->create();
        producto::factory(50)->create();


    }
}