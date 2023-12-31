<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTables extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
            $table->string('seo_image')->nullable();
        });

        Schema::create('news_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'news');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
        });

        Schema::create('news_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'news');
        });

        Schema::create('news_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'news');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_revisions');
        Schema::dropIfExists('news_translations');
        Schema::dropIfExists('news_slugs');
        Schema::dropIfExists('news');
    }
}
