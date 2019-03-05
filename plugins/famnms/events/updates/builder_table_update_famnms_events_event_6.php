<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFamnmsEventsEvent6 extends Migration
{
    public function up()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->text('agenda')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->dropColumn('agenda');
        });
    }
}
