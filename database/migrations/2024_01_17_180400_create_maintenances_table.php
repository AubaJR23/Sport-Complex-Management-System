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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id('facility_id', 3);
            $table->string('facility_name', 40)->nullable();
            $table->enum('facility_type', ['indoor', 'outdoor'])->nullable();
            $table->string('facility_description', 50)->nullable();
            $table->string('facility_last_maintenance', 30)->nullable();
            $table->enum('maintenance_status', ['yes', 'no'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
