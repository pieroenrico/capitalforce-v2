<?php namespace Tropa\Treasury\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTropaTreasury2 extends Migration
{
    public function up()
    {
        Schema::table('tropa_treasury_', function($table)
        {
            $table->text('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('tropa_treasury_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
