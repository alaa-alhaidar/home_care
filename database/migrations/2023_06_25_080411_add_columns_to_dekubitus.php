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
        Schema::table('dekubitus', function (Blueprint $table) {
            $table->string('versicherungsnummer');
            $table->string('massnahmen');
            $table->boolean('status');
            $table->string('hinweis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dekubitus', function (Blueprint $table) {
            //
        });
    }
};
