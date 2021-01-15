<?php

namespace Database\Factories;

use App\Models\Estudio;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estudio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(1),
            'descripcion'=>$this->faker->sentence(1),
            'beneficios'=>$this->faker->sentence(1),
            'metodologia'=>$this->faker->sentence(1)
        ];
    }
}
