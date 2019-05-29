<?php namespace Famnms\SitewideNotification\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFamnmsSitewidenotificationNotification extends Migration
{
    public function up()
    {
        Schema::table('famnms_sitewidenotification_notification', function($table)
        {
            $table->string('severity', 20)->nullable()->default('low');
        });
    }
    
    public function down()
    {
        Schema::table('famnms_sitewidenotification_notification', function($table)
        {
            $table->dropColumn('severity');
        });
    }
}
