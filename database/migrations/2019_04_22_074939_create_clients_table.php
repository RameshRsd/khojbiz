<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('company_address')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->string('website')->nullable();
            $table->string('office_contact')->nullable();
            $table->string('company_head')->nullable();
            $table->string('mobile')->nullable();
            $table->string('ofc_tel_no')->nullable();
            $table->enum('client_type',['bronze','silver','gold','diamond','platinum','free_listing'])->nullable();
            $table->enum('company_nature',['manufacture','business','product'])->nullable();
            $table->longText('company_profile')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('alpha_id')->nullable();
            $table->integer('staff_id')->nullable();
            $table->text('map_link')->nullable();
            $table->string('password')->nullable();
            $table->integer('entry_by')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
