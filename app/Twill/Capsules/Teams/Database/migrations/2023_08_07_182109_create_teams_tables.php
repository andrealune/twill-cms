<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTables extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('name', 200);
            $table->string('linkedin', 200)->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('team_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'team');
            $table->string('role', 200)->nullable();
            $table->text('bio')->nullable();
        });




    }

    public function down()
    {

        Schema::dropIfExists('team_translations');
        Schema::dropIfExists('teams');
    }
}
