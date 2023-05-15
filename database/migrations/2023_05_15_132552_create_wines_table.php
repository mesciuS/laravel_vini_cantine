<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->year('year');
            $table->string('winemaker', 50);
            $table->string('color', 50);
            $table->string('type', 50);
            $table->tinyInteger('volume');
            $table->tinyInteger('extract');
            $table->tinyInteger('acidity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wines');
    }
};
