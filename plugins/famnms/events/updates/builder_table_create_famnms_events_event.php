<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFamnmsEventsEvent extends Migration
{
    public function up()
    {
        Schema::create('famnms_events_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('event_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('title', 500);
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('famnms_events_event');
    }
}
