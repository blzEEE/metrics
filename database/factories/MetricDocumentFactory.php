<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\MetricCategory;
use App\Models\MetricDocumentStatus;
use App\Models\MetricPeriod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MetricDocument>
 */
class MetricDocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "metric_document_status_id" => MetricDocumentStatus::get()->random()->id,
            "company_id" => Company::get()->random()->id,
            "metric_category_id" => MetricCategory::get()->random()->id,
            "metric_period_id" => MetricPeriod::get()->random()->id,
            "year" => 2022,
            "quarter" => 4,
            "month" => 10
        ];
    }
}
