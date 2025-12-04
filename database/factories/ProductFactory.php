<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition(): array
    {
        $products = [
            'Vegetables' =>[
                'Buttherhead Lettuce',
                'Carrots',
                'Cauliflower',
                'Celery',
                'Chili',
                'Cucumber',
                'Eggplant',
                'Bitter Gourd',
                'Green Beans',
                'Lettuce',
                'Kale',
                'Okra',
                'Potatos',
                'Romaine Lettuce',
                'Tomato'
            ],
            'Fruits' => [
                'Apple',
                'Banana',
                'Blue Berries',
                'Kiwi',
                'Mandarin',
                'Papaya',
                'Watermelon',
                'Raspberry',
                'Rambutan',
                'Passion Fruit',
                'Mangosteen',
                'Guava',
                'Custard Apple',
                'Coconut',
                'Cantaloupe',
                'Black Currant'
            ]

            ];


        return [
            'product_name' => $this->faker->word(),
            'product_details' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'stock' => $this->faker->numberBetween(0, 100),
            'category_id' => $categoryId,
        ];
    }
}
