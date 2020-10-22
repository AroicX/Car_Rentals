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
            $table
                ->integer('client_id')
                ->unsigned()
                ->nullable();
            $table->string('car_name')->nullable();
            $table->string('car_type')->nullable();
            $table->string('car_model')->nullable();
            $table->string('car_color')->nullable();
            $table->string('gear_type')->nullable();
            $table->string('car_documents')->nullable();
            $table->string('size_of_tyre')->nullable();
            $table->string('plate_num')->nullable();
            $table->string('hire_cost')->nullable();
            $table->string('capacity')->nullable();
            $table->string('engine_num')->nullable();
            $table->string('year_of_make')->nullable();
            $table->longText('description')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
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
