<?php namespace Tropa\Consulting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTropaConsulting extends Migration
{
    public function up()
    {
        Schema::create('tropa_consulting_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('intro')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tropa_consulting_');
    }
}
