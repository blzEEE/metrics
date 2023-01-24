<?php

use App\Models\MetricCategory;
use App\Models\MetricPeriod;
use App\Models\MetricTargetOrder;
use App\Models\MetricUnit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metrics', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignIdFor(MetricCategory::class)->constrained();
            $table->foreignIdFor(MetricUnit::class)->constrained();
            $table->foreignIdFor(MetricPeriod::class)->constrained();
            $table->foreignIdFor(MetricTargetOrder::class)->constrained();
            $table->string('name', 255);
            $table->string('description', 1000)->nullable();
            $table->string('formula', 255)->nullable();
            $table->date('date_begin');
            $table->date('date_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metrics');
    }
};
