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
            $table->string('name');
            $table->boolean('is_recommended')->default(false);
            $table->timestamps();
        });

        DB::table('templates')->insert([
            [
                'id' => 1,
                'name' => 'Professional',
                'heading_class' => 'header-paper1',
                'body_class' => 'body-paper1',
                'is_recommended' => true
            ],
            [
                'id' => 2,
                'name' => 'Professional Red',
                'heading_class' => 'header-paper2',
                'body_class' => 'body-paper2',
                'is_recommended' => false
            ],
            [
                'id' => 3,
                'name' => 'Basic Black',
                'heading_class' => 'header-paper3',
                'body_class' => 'body-paper3',
                'is_recommended' => false
            ],
            [
                'id' => 4,
                'name' => 'Basic',
                'heading_class' => 'header-paper4',
                'body_class' => 'body-paper4',
                'is_recommended' => false
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
