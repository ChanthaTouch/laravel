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
                Schema::create('project_client_table', function (Blueprint $table) {
                $table->id();
                $table->string('project_name');
                $table->string('address')->nullable();
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->string('website')->nullable();
                $table->string('contact_person')->nullable();
                $table->date('start_date'); 
                $table->date('end_date')->nullable();
                $table->text('description')->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_client_table');
    }
};
