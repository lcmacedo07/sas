<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Historystatu;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class HistorystatuFactory extends Factory
{
    protected $model = Historystatu::class;

    public function definition()
    {
        return [
            
			'people_id' => 1,
			'status' => $this->faker->randomElement(['P', 'I', 'A']),
             
        ];

    }
}
