<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class producto_Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_pro'=>$this->faker->name(),
            'tipo_pro'=>$this->faker->randomElement([1,2,3]),
            'precio_pro'=>$this->faker->name(),
            'cantidad_pro'=>$this->faker->name()
        ];
    }
}
