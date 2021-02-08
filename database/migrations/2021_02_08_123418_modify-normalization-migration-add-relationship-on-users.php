<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyNormalizationMigrationAddRelationshipOnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // remove foreign keys based on personal_informations

        Schema::table('project_and_researches', function(Blueprint $table) {
            $table->dropForeign('project_and_researches_personalinfo_id_foreign');
            $table->dropColumn('personalinfo_id');
        });

        Schema::table('hobbies', function(Blueprint $table) {
            $table->dropForeign('hobbies_personalinfo_id_foreign');
            $table->dropColumn('personalinfo_id');
        });

        Schema::table('work_experiences', function(Blueprint $table) {
            $table->dropForeign('work_experiences_personalinfo_id_foreign');
            $table->dropColumn('personalinfo_id');
        });

        Schema::table('education_back_grounds', function(Blueprint $table) {
            $table->dropForeign('education_back_grounds_personalinfo_id_foreign');
            $table->dropColumn('personalinfo_id');
        });

        Schema::table('referees', function(Blueprint $table) {
            $table->dropForeign('referees_personalinfo_id_foreign');
            $table->dropColumn('personalinfo_id');
        });

        Schema::table('languages', function(Blueprint $table) {
            $table->dropForeign('languages_personalinfo_id_foreign');
            $table->dropColumn('personalinfo_id');
        });

        // add foreigh key based on users table

        Schema::table('personal_informations', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('project_and_researches', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('hobbies', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('work_experiences', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('education_back_grounds', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('referees', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('languages', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
            $table->dropForeign('personal_informations_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('project_and_researches', function(Blueprint $table) {
            $table->dropForeign('project_and_researches_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('hobbies', function(Blueprint $table) {
            $table->dropForeign('hobbies_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('work_experiences', function(Blueprint $table) {
            $table->dropForeign('work_experiences_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('education_back_grounds', function(Blueprint $table) {
            $table->dropForeign('education_back_grounds_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('referees', function(Blueprint $table) {
            $table->dropForeign('referees_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('languages', function(Blueprint $table) {
            $table->dropForeign('languages_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
