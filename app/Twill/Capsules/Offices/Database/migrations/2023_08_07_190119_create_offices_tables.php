<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTables extends Migration
{
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->string('country');
            $table->string('city');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('office_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'office');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });




    }

    public function down()
    {

        Schema::dropIfExists('office_translations');
        Schema::dropIfExists('offices');
    }
}
