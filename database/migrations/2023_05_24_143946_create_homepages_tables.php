<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTables extends Migration
{
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
            $table->string('seo_image')->nullable();
        });

        Schema::create('homepage_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'homepage');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('hero_text')->nullable();
            $table->string('intro_text')->nullable();
            $table->string('intro_cta')->nullable();
            $table->string('intro_link')->nullable();
        });

    }

    public function down()
    {

        Schema::dropIfExists('homepage_translations');
        Schema::dropIfExists('homepages');
    }
}
