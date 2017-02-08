<?php namespace LeaderInternet\Documentation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLeaderinternetDocumentationDocumentation2 extends Migration
{
    public function up()
    {
        Schema::table('leaderinternet_documentation_documentation', function($table)
        {
            $table->date('created_at');
            $table->date('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('leaderinternet_documentation_documentation', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
