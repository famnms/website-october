<?php namespace Famnms\Events\Components;

use Cms\Classes\ComponentBase;
use Carbon\Carbon;
use Famnms\Events\Models\Event;
use BackendAuth;

class EventDetail extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Event Detail',
            'description' => 'Provides the information for a given event. DateTimes returned are UTC'
        ];
    }

    public function defineProperties()
    {
        return [
            'event_id' => [
                'title' => 'Event ID',
                'description' => 'The ID of the event to lookup',
                'type' => 'string'
            ]
        ];
    }
    
    public function onRun() {
        $timezone = $this->property("timezone");
        $event = Event::find($this->property('event_id'));
        if ($event) {
            $this->page['event'] = $event;
        } else {
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }
    }

    public function agenda_times() {
        $agenda_with_times = [];
        $event = $this->page['event'];
        $agendaItems = $event['agenda'];
        $time = new Carbon($event['start_time']);
        foreach ($agendaItems as $item) {
            $new_item = &$agenda_with_times[];
            $new_item['topic'] = $item['topic'];
            $new_item['start_time'] = $time->toDateTimeString();
            $minutes = $item['num_minutes'];
            $time = $time->addMinutes($minutes);
            $new_item['end_time'] = $time->toDateTimeString();
        }
        return $agenda_with_times;
    }
}
