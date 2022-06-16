<?php
namespace Grogg19\Projects\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProjectsPhotosTable extends Migration
{
    public function up()
    {
        Schema::create('grogg_project_photos', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('project_id')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('sort_order')->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('grogg_projects')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grogg_project_photos');
    }
}