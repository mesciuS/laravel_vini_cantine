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
        Schema::create('canteens', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('address', 50);
            $table->string('town', 50);
            $table->string('province', 50);
            $table->string('region', 50);
            $table->string('nation', 50);
            $table->string('telephon', 50);
            $table->string('email', 50);
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
        Schema::dropIfExists('canteens');
    }
};
