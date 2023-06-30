<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectCategoriesTables extends Migration
{
    public function up()
    {
        Schema::create('project_categories', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('project_category_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'project_category');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('project_category_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'project_category');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('project_category_translations');
        Schema::dropIfExists('project_category_slugs');
        Schema::dropIfExists('project_categories');
    }
}
