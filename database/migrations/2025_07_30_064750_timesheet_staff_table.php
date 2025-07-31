<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('timesheet_staff_table', function(Blueprint $table){
            $table->id();
            $table->string('id_staff')->nullable();
            $table->string('name_staff')->nullable();
            $table->string('project')->nullable();
            $table->string('contract')->nullable();
            $table->string('component')->nullable();
            $table->string('phase')->nullable();
            $table->integer('chargeable_time_mon')->nullable();
            $table->integer('chargeable_time_tue')->nullable();
            $table->integer('chargeable_time_wed')->nullable();
            $table->integer('chargeable_time_thu')->nullable();
            $table->integer('chargeable_time_fri')->nullable();
            $table->integer('chargeable_time_sat')->nullable();
            $table->integer('chargeable_time_sun')->nullable();
            $table->integer('chargeable_time_total')->nullable();
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('timesheet_staff_table');
    }
};
