<?php namespace Tropa\ArtificialIntelligence\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTropaArtificialintelligence extends Migration
{
    public function up()
    {
        Schema::table('tropa_artificialintelligence_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('tropa_artificialintelligence_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
