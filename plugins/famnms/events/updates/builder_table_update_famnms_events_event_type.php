<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFamnmsEventsEventType extends Migration
{
    public function up()
    {
        Schema::table('famnms_events_event_type', function($table)
        {
            $table->renameColumn('event_type_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('famnms_events_event_type', function($table)
        {
            $table->renameColumn('id', 'event_type_id');
        });
    }
}
