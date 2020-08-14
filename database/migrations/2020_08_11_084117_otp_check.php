<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OtpCheck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otpCheck', function (Blueprint $table) {
            $table->bigIncrements('PID');
            $table->bigInteger('adminPID')->unsigned()->nullable();
            $table->integer('otp');
            $table->timestamps();
            $table->dateTime('validTill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otpCheck');
    }
}
