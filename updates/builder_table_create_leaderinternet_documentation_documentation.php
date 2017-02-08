<?php namespace LeaderInternet\Documentation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLeaderinternetDocumentationDocumentation extends Migration
{
    public function up()
    {
        Schema::create('leaderinternet_documentation_documentation', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('content', 3000);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leaderinternet_documentation_documentation');
    }
}