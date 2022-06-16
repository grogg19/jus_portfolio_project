<?php
namespace Grogg19\Projects\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('grogg_projects', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->unsignedInteger('front_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grogg_projects');
    }
}