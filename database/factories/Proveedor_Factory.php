<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Proveedor_Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() :array
    {
        return [
            'nombre_prov'=>$this->faker->name(),
            'direccion_prov'=>$this->faker->name(),
            'nro_telefono_prov'=>$this->faker->name(),
            'pag_web'=>$this->faker->name(),
        ];
    }
}
