<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\People;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PeopleFactory extends Factory
{
    protected $model = People::class;

    public function definition()
    {
        return [
            
			'name' => $this->faker->name,
			// 'document' => $this->faker->document,
			'document' => $this->faker->numberBetween([1, 100]),
			'phone' => $this->faker->numberBetween([1, 150]),
			'status' => $this->faker->randomElement(['P', 'I', 'A']),
			'user' => $this->faker->sentence,
             
        ];

    }
}
