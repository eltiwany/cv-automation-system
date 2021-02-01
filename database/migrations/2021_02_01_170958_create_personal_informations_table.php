<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->String('First_Name');
            $table->String('Middle_Name');
            $table->String('Sur_Name');
            $table->String('Email');
            $table->String('Phone_Number');
            $table->String('DateOf_Birth');
            $table->String('Address');
            $table->String('Martial_Status');
            $table->String('Gender');


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
        Schema::dropIfExists('personal_informations');
    }
}
