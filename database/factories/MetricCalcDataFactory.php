<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Metric;

class MetricCalcDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'metric_id' => Metric::get()->random()->id,
            'name' => $this->faker->text(50),
            'description' => $this->faker->text(255)
        ];
    }
}
