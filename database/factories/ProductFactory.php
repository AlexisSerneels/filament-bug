<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => [
                'en' => $this->faker->words(3, true),
                'fr' => $this->faker->words(3, true),
            ],
            'price' => $this->faker->numberBetween(1,60),
            'description' => [
                'en' => $this->faker->words(3, true),
                'fr' => $this->faker->words(3, true),
            ],
            'content' => $this->faker->paragraph(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
