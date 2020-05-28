<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->enum('gender', ['male', 'female'])->default('male')->nullable();
            $table->string('age')->nullable();
            $table->string('valid_id')->nullable();
            $table->string('drivers_lincese')->nullable();
            $table->integer('profile_completed')->default(0);
            $table->boolean('status')->default(0);
            $table->integer('isSubscribed')->default(0);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
