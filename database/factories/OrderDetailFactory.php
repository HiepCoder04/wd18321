<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id'=> Order::all()->random()->order_id,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            'product_id' => Product::all()->random()->product_id,
            'price' => $this->faker->randomFloat(2,0, 99999999.99)
        ];
    }
}
