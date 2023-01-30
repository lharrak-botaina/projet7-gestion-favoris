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
        Schema::create('weatherFavorite', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string("country");
            // $table->string("coulds");
            // $table->string("temp");
            // $table->string("feels_Like");
            // $table->string("humudity");
            // $table->string("wind");



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
        //
    }
};
