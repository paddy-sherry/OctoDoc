<?php namespace LeaderInternet\Documentation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLeaderinternetDocumentationDocumentation2 extends Migration
{
    public function up()
    {
        Schema::table('leaderinternet_documentation_documentation', function($table)
        {
            $table->string('content', 10000)->change();
        });
    }

    public function down()
    {
        Schema::table('leaderinternet_documentation_documentation', function($table)
        {
            $table->string('content', 10000)->change();
        });
    }
}




