<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectAndResearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_and__researches', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->String('TimeStarted');
            $table->String('TimeEnded');

            $table->unsignedBigInteger('personalinfo_id');
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
        Schema::dropIfExists('project_and__researches');
    }
}
