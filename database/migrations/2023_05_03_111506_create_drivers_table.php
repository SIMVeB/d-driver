<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('gender');
            $table->date('birthDate')->nullable();
            $table->string('birthPlace');

            $table->string('email');
            $table->string('phoneNumber');
            $table->string('passport')->nullable();
            $table->string('zip')->nullable();
            $table->string('nif')->nullable();

            $table->string('district')->nullable();
            $table->string('address');
            $table->string('village');
            $table->string('commune')->nullable();
            $table->string('region')->nullable();
            $table->string('permis')->nullable();



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
        Schema::dropIfExists('drivers');
    }
}
