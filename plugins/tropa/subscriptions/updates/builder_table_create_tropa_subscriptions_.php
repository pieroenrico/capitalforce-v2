<?php namespace Tropa\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTropaSubscriptions extends Migration
{
    public function up()
    {
        Schema::create('tropa_subscriptions_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email', 250);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tropa_subscriptions_');
    }
}
