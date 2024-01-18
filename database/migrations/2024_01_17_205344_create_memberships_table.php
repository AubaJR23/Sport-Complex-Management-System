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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id('membership_id');
            $table->string('customer_name', 40);
            $table->string('customer_email')->unique();
            $table->enum('membership_level', ['Bronze', 'Silver', 'Gold', 'Platinum']);
            $table->enum('duration', ['3 months', '6 months', '9 months', '12 months']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
