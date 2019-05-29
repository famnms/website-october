<?php namespace Famnms\SitewideNotification\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFamnmsSitewidenotificationNotification extends Migration
{
    public function up()
    {
        Schema::create('famnms_sitewidenotification_notification', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('text');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('famnms_sitewidenotification_notification');
    }
}
