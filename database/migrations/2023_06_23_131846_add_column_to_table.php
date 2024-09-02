<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('vitalzeichens', function (Blueprint $table) {
            // Use raw SQL to check if the column exists
            if (!Schema::hasColumn('vitalzeichens', 'versicherungsnummer')) {
                $table->string('versicherungsnummer')->notNull();
            }
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vitalzeichens', function (Blueprint $table) {
            //
        });
    }
};
