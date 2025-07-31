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
        Schema::create('table_project_list', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('project_email')->nullable();
            $table->string('start_date')->nullable(); // fixed from "start Date"
            $table->string('end_date')->nullable();
            $table->string('location')->nullable();
            $table->string('scan_in')->nullable();
             $table->string('scan_out')->nullable();
            $table->string('budget')->nullable();
            $table->string('min_labour')->nullable();
            $table->string('max_labour')->nullable();
            $table->string('variant_otam')->nullable();
            $table->string('variant_extra_ot')->nullable();
            $table->string('team_ot_limit')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_project_list');
    }
};
