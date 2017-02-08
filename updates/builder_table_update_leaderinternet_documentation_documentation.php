<?php namespace LeaderInternet\Documentation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLeaderinternetDocumentationDocumentation extends Migration
{
    public function up()
    {
        Schema::table('leaderinternet_documentation_documentation', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('leaderinternet_documentation_documentation', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
