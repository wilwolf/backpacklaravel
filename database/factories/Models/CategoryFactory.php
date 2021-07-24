<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Category;
use App\Models\Category;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_id' => Category::factory(),
            'lft' => $this->faker->numberBetween(-10000, 10000),
            'rgt' => $this->faker->numberBetween(-10000, 10000),
            'depth' => $this->faker->numberBetween(-10000, 10000),
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'softDeletes' => $this->faker->word,
        ];
    }
}
