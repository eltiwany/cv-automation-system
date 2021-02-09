<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveDuplicateDataOnPersonalInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_informations', function(Blueprint $table) {
            $table->dropColumn('First_Name');
            $table->dropColumn('Middle_Name');
            $table->dropColumn('Sur_Name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_informations', function(Blueprint $table) {
            $table->String('First_Name');
            $table->String('Middle_Name');
            $table->String('Sur_Name');
        });
    }
}
