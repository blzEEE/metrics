<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetricUnit;

class MetricUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetricUnit::factory(5)->create();
    }
}
