<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(nbMaxDecimals: 3, min: 10, max: 500),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            'quantity' => $this->faker->randomNumber(nbDigits: 3)
        ];
    }
}
