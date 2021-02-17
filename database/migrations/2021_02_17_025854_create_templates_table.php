<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading_class');
            $table->string('body_class');
            $table->timestamps();
        });

        DB::table('templates')->insert([
            [
                'id' => 1,
                'heading_class' => 'header-paper1',
                'body_class' => 'body-paper1'
            ],
            [
                'id' => 2,
                'heading_class' => 'header-paper2',
                'body_class' => 'body-paper2'
            ],
            [
                'id' => 3,
                'heading_class' => 'header-paper3',
                'body_class' => 'body-paper3'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates');
    }
}
