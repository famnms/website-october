<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFamnmsEventsEvent5 extends Migration
{
    public function up()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->boolean('track_sign_ups')->nullable();
            $table->boolean('track_attendance')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('famnms_events_event', function($table)
        {
            $table->dropColumn('track_sign_ups');
            $table->dropColumn('track_attendance');
        });
    }
}
