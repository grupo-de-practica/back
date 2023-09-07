<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained();
            $table->foreignId('zone_type_id')->constrained();
            $table->string('address', 150);
            $table->double('latitude', 11, 8);
            $table->double('longitude', 11, 8);
            $table->integer('order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
