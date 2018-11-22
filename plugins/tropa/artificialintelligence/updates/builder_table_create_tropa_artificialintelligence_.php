<?php namespace Tropa\ArtificialIntelligence\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTropaArtificialintelligence extends Migration
{
    public function up()
    {
        Schema::create('tropa_artificialintelligence_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 250);
            $table->text('intro');
            $table->string('slug', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tropa_artificialintelligence_');
    }
}
