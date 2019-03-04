<?php namespace Famnms\Events\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'famnms_events_event';

    /**
     * Relationships
    */
    public $belongsTo = [
        'event_type' => '\Famnms\Events\Models\EventType',
        'contact' => '\Backend\Models\User'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
