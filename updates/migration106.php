<?php namespace LeaderInternet\Documentation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration106 extends Migration
{
    public function up()
    {
        Schema::table('leaderinternet_documentation_documentation', function($table)
        {
            $table->text('content')->change();
        });
    }

    public function down()
    {
        // Schema::drop('leaderinternet_documentation_table');
    }
}