<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title,
            'description' => $this->faker->paragraph,
            'price' => 1000,
            'oldprice' => 2000,
            'enabled' => true,
            'category_id' => 0,
            'brand_id' => 0,
            'stock' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
