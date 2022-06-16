<?php namespace Grogg19\Projects\Updates;

use October\Rain\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class AddSortFieldToProjectsTable extends Migration
{
    public function up()
    {
         Schema::table('grogg_projects', static function (Blueprint $table)
         {
             $table->integer('sort_order', false, true);
         });
    }

    public function down()
    {
        Schema::table('grogg_projects', static function (Blueprint $table)
        {
            $table->dropColumn('sort_order');
        });
    }
}