<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorsTables extends Migration
{
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
            $table->integer('intro_layout')->nullable();
            $table->string('seo_image')->nullable();
        });

        Schema::create('sector_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'sector');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('intro_text')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
        });

        Schema::create('sector_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'sector');
        });

        Schema::create('sector_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'sector');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sector_revisions');
        Schema::dropIfExists('sector_translations');
        Schema::dropIfExists('sector_slugs');
        Schema::dropIfExists('sectors');
    }
}
