<?php namespace Tropa\Alliances\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTropaAlliances extends Migration
{
    public function up()
    {
        Schema::create('tropa_alliances_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 250);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tropa_alliances_');
    }
}
