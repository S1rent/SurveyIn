<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('userID');
            $table->string('email')->unique();
            $table->string('fullName')->nullable();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('dateAndPOB')->nullable();
            $table->string('occupation')->nullable();
            $table->integer('rewardPoint')->nullable();
            $table->integer('balance')->nullable();
            $table->string('roleStatus');
            $table->string('profileImageURL')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
