<?php

namespace Database\Factories;

use App\Models\Metric;
use App\Models\MetricDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MetricDocumentValue>
 */
class MetricDocumentValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "metric_document_id" => MetricDocument::get()->random()->id,
            "metric_id" => Metric::get()->random()->id,
            "value" => $this->faker->randomFloat(2, 0, 1000)
        ];
    }
}
