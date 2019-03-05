<?php namespace Famnms\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFamnmsEventsRegistrant extends Migration
{
    public function up()
    {
        Schema::create('famnms_events_registrant', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('event_id')->nullable();
            $table->integer('member_id')->nullable();
            $table->boolean('can_transport')->nullable();
            $table->text('comments')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('famnms_events_registrant');
    }
}