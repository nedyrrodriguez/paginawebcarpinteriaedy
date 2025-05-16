<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto1>
 */
class Producto1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre'=>fake()->word(),
            'descripcion'=>fake()->text(),
            'precio'=>fake()->numberBetween(10000,1000000),
            'cantidad'=>fake()->numberBetween(1,50),
        
        ];
    }
}
