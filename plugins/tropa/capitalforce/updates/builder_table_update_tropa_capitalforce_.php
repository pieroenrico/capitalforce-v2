<?php namespace Tropa\CapitalForce\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTropaCapitalforce extends Migration
{
    public function up()
    {
        Schema::table('tropa_capitalforce_', function($table)
        {
            $table->boolean('display_scroll')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('tropa_capitalforce_', function($table)
        {
            $table->dropColumn('display_scroll');
        });
    }
}
