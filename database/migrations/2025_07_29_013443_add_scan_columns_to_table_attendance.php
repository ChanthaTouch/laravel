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
        Schema::table('table_attendance', function (Blueprint $table) {
             $table->dateTime('scan_in')->nullable();
            $table->dateTime('scan_out')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('table_attendance', function (Blueprint $table) {
        $table->dropColumn(['scan_in', 'scan_out']);
     });
    }
};
