<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('birthPlace')->nullable();
            $table->string('profession')->nullable();
            $table->string('personality')->nullable();

            $table->foreignId('email')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('passport')->nullable();
            $table->string('zip')->nullable();
            $table->string('nif')->nullable();

            $table->foreignId('address')->nullable();
            $table->foreignId('district')->nullable();
            $table->integer('village')->nullable();
            $table->string('commune')->nullable();
            $table->string('region')->nullable();

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
        Schema::dropIfExists('owners');
    }
}
