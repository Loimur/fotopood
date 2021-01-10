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
            'name' => $this->faker->company,
            'ean' => $this->faker->ean13,
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(10, 100),
            'amount_in_stock' => $this->faker->randomNumber(2)
        ];
    }
}
