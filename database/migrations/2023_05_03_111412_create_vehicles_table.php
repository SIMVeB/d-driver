<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();

            $table->string('genre');
            $table->string('manufacturer');
            $table->string('chassis')->nullable();
            $table->string('bodywork');
            $table->string('serialNumber')->nullable();
            $table->string('bodyworkNumber')->nullable();
            $table->string('energy');

            $table->integer('sitePlace');
            $table->string('vin')->nullable();
            $table->string('usageState')->nullable();
            $table->string('power');

            $table->date('registrationDate');
            $table->date('firstUseDate')->nullable();
            $table->date('dateOfManufacturer')->nullable();
            $table->string('glassType')->nullable();
            $table->string('frontShape');
            $table->string('backShape');


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
        Schema::dropIfExists('vehicles');
    }
}
