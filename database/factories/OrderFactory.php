<?php

namespace Database\Factories;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;
    public function definition(): array
    {
        return [
            'customer_id' => \App\Models\Customer::inRandomOrder()->first()->id,
            'address_id' => \App\Models\Address::inRandomOrder()->first()->id,
            'product_id' => \App\Models\Product::inRandomOrder()->first()->id,
            'amount' => $this->faker->randomFloat(2, 10, 500),
            'order_status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'cancelled']),

        ];
    }
}
