<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetricDocument;

class MetricDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetricDocument::factory(50)->create();
    }
}
