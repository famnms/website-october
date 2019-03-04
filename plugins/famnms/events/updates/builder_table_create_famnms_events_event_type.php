<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFamnmsEventsEventType extends Migration
{
    public function up()
    {
        Schema::create('famnms_events_event_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('event_type_id');
            $table->string('short_name');
            $table->string('long_name');
            $table->binary('is_public')->default('1');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('famnms_events_event_type');
    }
}
