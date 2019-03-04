<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFamnmsEventsEvent extends Migration
{
    public function up()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->renameColumn('event_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->renameColumn('id', 'event_id');
        });
    }
}
