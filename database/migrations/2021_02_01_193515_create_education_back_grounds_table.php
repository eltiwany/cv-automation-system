<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationBackGroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_back_grounds', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->String('type');
            $table->String('TimeStarted');
            $table->String('TimeEnded');
            $table->String('Type');
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
        Schema::dropIfExists('education_back_grounds');
    }
}
