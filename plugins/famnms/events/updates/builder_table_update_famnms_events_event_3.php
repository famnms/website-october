<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFamnmsEventsEvent3 extends Migration
{
    public function up()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->integer('event_contact_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->dropColumn('event_contact_id');
        });
    }
}
