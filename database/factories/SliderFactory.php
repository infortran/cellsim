<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'subtitle' => $this->faker->paragraph,
            'text' => 'from',
            'img' => 'img.png',
            'producto_id' => $this->faker->randomDigitNotNull
        ];
    }
}
