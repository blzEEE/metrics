<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Metric;

class MetricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Metric::factory(50)->create();
    }
}
