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
          Schema::create('table_attendance', function(Blueprint $table){
            $table->id();
            $table->string('staff_id')->nullable();
            $table->string('name_staff')->nullable();
            $table->string('gender')->nullable();
            $table->string('department')->nullable();
            $table->string('leave_type')->nullable();
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
            $table->string('shift_type')->nullable();
            $table->string('period')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExist(' Schema::dropIfExist');
    }
};
