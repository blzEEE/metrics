<?php

namespace Database\Seeders;

use App\Models\MetricCategory;
use Illuminate\Database\Seeder;

class MetricCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetricCategory::factory(10)->create();
    }
}
