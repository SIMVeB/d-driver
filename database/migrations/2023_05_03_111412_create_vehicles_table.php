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
        Schema::disableForeignKeyConstraints();
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();

            $table->string('genre')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('chassis')->nullable();
            $table->string('bodywork')->nullable();
            $table->string('serialNumber')->nullable();
            $table->string('bodyworkColor')->nullable();
            $table->string('energy')->nullable();
            $table->string('type')->nullable();


            $table->integer('sitePlace')->nullable();
            $table->string('vin')->nullable()->nullable();
            $table->string('usageState')->nullable();
            $table->string('power')->nullable();
            $table->boolean('airConditioner')->default(false);


            $table->date('registrationDate')->nullable();
            $table->date('circulationDate')->nullable();
            $table->date('firstUseDate')->nullable();
            $table->string('glassType')->nullable();
            $table->string('frontShape')->nullable();
            $table->string('backShape')->nullable();

            $table->foreignId('owner_id')->nullable()
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('driver_id')->nullable()
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');


            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
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
