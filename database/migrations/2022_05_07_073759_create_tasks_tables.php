<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTables extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('task_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'task');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('task_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'task');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('task_translations');
        Schema::dropIfExists('task_slugs');
        Schema::dropIfExists('tasks');
    }
}
