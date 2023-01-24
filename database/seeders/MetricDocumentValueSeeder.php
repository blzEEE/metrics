<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetricDocumentValue;

class MetricDocumentValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetricDocumentValue::factory(50)->create();
    }
}
