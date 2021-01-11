<?php

namespace Database\Factories;

use App\Models\Cuidades;
use Illuminate\Database\Eloquent\Factories\Factory;

class CuidadesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cuidades::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'municipio_id' => 1,
        ];
    }
}
