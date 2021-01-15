<?php

namespace Database\Factories;

use App\Models\Doctore;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(1),
            'apellido'=>$this->faker->sentence(1),
            'resumen'=>$this->faker->sentence(1),
            'descripcion'=>$this->faker->sentence(1),
            'id_especialidades'=>$this->faker->numberBetween(1,30)
        ];
    }
}
