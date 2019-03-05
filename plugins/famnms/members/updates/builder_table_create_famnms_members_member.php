<?php namespace Famnms\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFamnmsMembersMember extends Migration
{
    public function up()
    {
        Schema::create('famnms_members_member', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('member_id');
            $table->integer('user_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->boolean('public_profile')->default(1);
            $table->string('email_address')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('famnms_members_member');
    }
}
