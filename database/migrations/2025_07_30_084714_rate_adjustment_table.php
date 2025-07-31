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
        Schema::create('rate_adjustment_table', function(Blueprint $table){
            $table->id();
            $table->string('staff_id')->nullable();
            $table->string('name_staff')->nullable();
            $table->string('position')->nullable();
            $table->string('level')->nullable();
            $table->string('grade')->nullable();
            $table->string('category')->nullable();
            $table->string('direct_manager')->nullable();
            $table->string('indirect_manager')->nullable();
            $table->string('last_updated')->nullable();
            $table->string('previous_wage/day')->nullable();
            $table->string('previous_wage/week')->nullable();
            $table->string('adjustment_date')->nullable();
            $table->string('reason')->nullable();
            $table->string('approved_by')->nullable();
            $table->string('requested_by')->nullable();
            // $table->string('request_date')->nullable();
            $table->timestamps();


        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate_adjustment_table');
    }
};
