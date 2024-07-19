<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    protected $model = Order::class;
    public function definition(): array
    {
        return [
            'user_id'=> User::all()->random()->user_id,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            'totalPrice' => $this->faker->randomFloat(2,0,99999999.99),
        ];
    }
}
