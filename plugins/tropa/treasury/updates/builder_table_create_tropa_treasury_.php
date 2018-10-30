<?php namespace Tropa\Treasury\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTropaTreasury extends Migration
{
    public function up()
    {
        Schema::create('tropa_treasury_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->text('intro');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tropa_treasury_');
    }
}
