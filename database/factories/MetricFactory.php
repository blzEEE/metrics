<?php

namespace Database\Factories;

use App\Models\MetricCategory;
use App\Models\MetricPeriod;
use App\Models\MetricTargetOrder;
use App\Models\MetricUnit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Metric>
 */
class MetricFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "metric_category_id" => MetricCategory::get()->random()->id,
            "metric_unit_id" => MetricUnit::get()->random()->id,
            "metric_period_id" => MetricPeriod::get()->random()->id,
            "metric_target_order_id" => MetricTargetOrder::get()->random()->id,
            "name" => $this->faker->sentence(5),
            "description" => $this->faker->text(1000),
            "formula" => $this->faker->text(255),
            "date_begin" => $this->faker->date(),
            "date_end" => $this->faker->date(),
        ];
    } 
}
