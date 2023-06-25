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
        Schema::table('medikaments', function (Blueprint $table) {
            $table->string('versicherungsnummer');
            $table->string('name');
            $table->string('applikationsform');
            $table->string('morgen');
            $table->string('nachmittag');
            $table->string('abend');
            $table->string('nachts');
            $table->string('hinweis');
            $table->string('Haupt_Bedarf');
            $table->string('personal');
            $table->string('rezept');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medikaments', function (Blueprint $table) {
            //
        });
    }
};
