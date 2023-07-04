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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('img');
            $table->date('data_vihoda');
            $table->integer('hronomitrash');
            $table->string('janr');
            $table->integer('ogr');
            $table->text('opis');
            $table->string('tim1');
            $table->string('tim2');
            $table->string('tim3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
