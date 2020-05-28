<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->string('car_name');
            $table->string('car_type');
            $table->string('car_model');
            $table->string('car_color');
            $table->string('gear_type');
            $table->string('car_documents');
            $table->string('size_of_tyre');
            $table->string('plate_num');
            $table->string('hire_cost');
            $table->string('capacity');
            $table->string('engine_num');
            $table->string('year_of_make');
            $table->longText('description')->nullable();
            $table->json('image')->nullable();
            $table->boolean('ac')->default(0);
            $table->boolean('fuel')->default(0);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('cars');
    }
}
