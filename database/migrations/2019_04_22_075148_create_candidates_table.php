<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dob')->nullable();
            $table->enum('gender',['Male','Female','Other'])->nullable();
            $table->enum('marital_status',['Married','Un-Married'])->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('telephone_no')->nullable();
            $table->integer('temp_district_id')->nullable();
            $table->string('current_address')->nullable();
            $table->integer('perm_district_id')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('preference_location')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
