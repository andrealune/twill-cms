<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTables extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
            $table->string('seo_image')->nullable();
        });

        Schema::create('project_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'project');
            $table->string('title', 200)->nullable();
            $table->text('abstract')->nullable();
            $table->text('description')->nullable();
            $table->string('client')->nullable();
            $table->string('location')->nullable();
            $table->string('year')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
        });

        Schema::create('project_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'project');
        });

        Schema::create('project_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'project');
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_revisions');
        Schema::dropIfExists('project_translations');
        Schema::dropIfExists('project_slugs');
        Schema::dropIfExists('projects');
    }
}
