<?php

use App\Models\Region;
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
        Schema::create('companies', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignIdFor(Region::class)->constrained();
            $table->string('city', 50);
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('director_position', 100);
            $table->string('director_name', 100);
            $table->boolean('competitive');
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
        Schema::dropIfExists('companies');
    }
};
