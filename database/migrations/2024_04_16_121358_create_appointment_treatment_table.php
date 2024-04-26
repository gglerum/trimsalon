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
        Schema::create('appointment_treatment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('appointment_id');
            $table->unsignedBigInteger('treatment_id');
            
            //foreign keys
            $table->foreign('appointment_id')->references('id')->on('appointments');
            $table->foreign('treatment_id')->references('id')->on('treatments');

            //indexes
            $table->unique(['appointment_id','treatment_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_treatment');
    }
};
