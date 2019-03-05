<?php namespace Famnms\Events\Components;

use Cms\Classes\ComponentBase;
use Carbon\Carbon;
use Famnms\Events\Models\Event;
use BackendAuth;

class EventOverview extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Event Overview',
            'description' => 'Shows a list of events with title, date, and link'
        ];
    }

    public function defineProperties()
    {
        return [
            'timezone' => [
                'title' => 'Timezone',
                'description' => 'The PHP timezone to display event times in',
                'default' => 'America/Detroit',
                'type' => 'string'
            ]
        ];
    }

    function upcomingEvents() {
	    return Event::where("end_time", '>=', Carbon::now())
		    ->orderBy('start_time', 'asc')
		    ->take(5)
		    ->get();
    }
    function now() {return date("Y-m-d");}

    // Check if a member of leadership is logged in
    function backendUser() {
	return BackendAuth::getUser();
    }

}
