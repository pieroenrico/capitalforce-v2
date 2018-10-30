<?php namespace Tropa\Treasury\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTropaTreasury extends Migration
{
    public function up()
    {
        Schema::table('tropa_treasury_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->change();
            $table->string('subtitle')->change();
        });
    }
    
    public function down()
    {
        Schema::table('tropa_treasury_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191)->change();
            $table->string('subtitle', 191)->change();
        });
    }
}
