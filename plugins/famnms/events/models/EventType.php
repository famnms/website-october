<?php namespace Famnms\Events\Models;

use Model;

/**
 * Model
 */
class EventType extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'famnms_events_event_type';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
