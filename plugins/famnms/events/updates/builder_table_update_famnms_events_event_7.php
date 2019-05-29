<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFamnmsEventsEvent7 extends Migration
{
    public function up()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->boolean('reminder_sent')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->dropColumn('reminder_sent');
        });
    }
}
