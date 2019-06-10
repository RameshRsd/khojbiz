<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('image')->nullable();
            $table->string('website')->nullable();
            $table->text('map_link')->nullable();
            $table->enum('status',[0,1])->nullable();
            $table->text('details')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('alpha_id')->nullable();
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
        Schema::dropIfExists('locations');
    }
}
