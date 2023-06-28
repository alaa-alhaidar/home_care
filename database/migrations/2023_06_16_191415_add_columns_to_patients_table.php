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
        Schema::table('patients', function (Blueprint $table) {
            $table->string('vorname');
            $table->string('nachname');
            $table->string('geschlecht');
            $table->date('geburtstag');
            $table->string('adresse');
            $table->string('pflegegrad');
            $table->integer('grosse');
            $table->string('versicherungsnummer');
            $table->string('kontakt');
            $table->date('aufnahmedatum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            //
        });
    }
};
