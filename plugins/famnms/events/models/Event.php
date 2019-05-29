<?php namespace Famnms\Events\Models;

use Model;
use Carbon\Carbon;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $jsonable = ['agenda'];


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
        'start_time' => 'required|date',
        'end_time' => 'required|date|after:start_time',
        'title' => 'required|max:255',
        'event_type_id' => 'required|exists:famnms_events_event_type,id',
        'contact_id' => 'required|exists:backend_users,id'
    ];

    public function filterFields($fields, $context = null) {
        // Usability improvement: Automatically set the end time of an event to
        // an hour after the start time.

        // NOTE: Currently does not work due to issue #4268 in the october repo
        // where updating the time field of a datetime picker doesn't send a
        // request to update dependent fields

        // Don't do anything if no start time
        if (empty($this->start_time)) return;

        $newEndTime = new Carbon($this->start_time);
        $newEndTime = $newEndTime->addHours(1);

        $fields->end_time->value = $newEndTime;
    }
}
