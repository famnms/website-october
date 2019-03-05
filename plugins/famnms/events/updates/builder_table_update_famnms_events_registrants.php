<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFamnmsEventsRegistrants extends Migration
{
    public function up()
    {
        Schema::rename('famnms_events_registrant', 'famnms_events_registrants');
    }
    
    public function down()
    {
        Schema::rename('famnms_events_registrants', 'famnms_events_registrant');
    }
}
