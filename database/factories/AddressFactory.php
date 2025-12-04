<?php

namespace Database\Factories;
use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model = Address::class;
    public function definition(): array
    {
        return [
            'street' => $this->faker->streetAddress(),
            'purok' => 'Purok ' . $this->faker->numberBetween(1, 10),
            'barangay' => $this->faker->citySuffix(),
            'customer_id' => \App\Models\Customer::inRandomOrder()->first()->id,
        ];
    }
}
