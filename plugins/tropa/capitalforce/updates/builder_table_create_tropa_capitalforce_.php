<?php namespace Tropa\CapitalForce\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTropaCapitalforce extends Migration
{
    public function up()
    {
        Schema::create('tropa_capitalforce_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('social_fb')->nullable();
            $table->string('social_tw')->nullable();
            $table->string('social_ig')->nullable();
            $table->string('social_web')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tropa_capitalforce_');
    }
}
