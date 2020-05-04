<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('year');
            $table->double('price');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('type',20)->nullable();
            
            $table->string('image',255)->default('image.png');
            $table->string('image_2x',255)->default('image.png');
            $table->string('image_3x',255)->default('image.png');
            $table->string('title_2')->nullable();
            $table->string('title_3')->nullable();
            $table->string('description_2')->nullable();
            $table->string('description_3')->nullable();
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
