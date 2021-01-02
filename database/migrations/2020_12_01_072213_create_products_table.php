<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('laptopCapacity');
            $table->string('laptopType');
            $table->string('healer');
            $table->string('memorySize');
            $table->string('price');
            $table->string('screenResolution');
            $table->string('theTypeOfHardDisk');
            $table->string('batteryLife');
            $table->string('system');

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
        Schema::dropIfExists('products');
    }
}
