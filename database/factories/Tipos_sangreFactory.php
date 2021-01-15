<?php

namespace Database\Factories;

use App\Models\Tipos_sangre;
use Illuminate\Database\Eloquent\Factories\Factory;

class Tipos_sangreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tipos_sangre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sangre'=>$this->faker->sentence(1)
        ];
    }
}
