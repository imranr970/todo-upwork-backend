<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    protected $model = Item::class;

    public function definition()
    {
        $icons = ['pen', 'trash'];
        return [
            'title' => $this->faker->unique()->name(),
            'description' => $this->faker->text(),
            'color' => $this->faker->colorName(),
            'due_date' => now()->addDays(rand(1, 5)),
            'order' => rand(0, 20),
            'icon'  => $icons[rand(0, 1)]
        ];
    }
}
