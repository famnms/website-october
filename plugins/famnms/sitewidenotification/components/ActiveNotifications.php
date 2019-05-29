<?php namespace Famnms\SitewideNotification\Components;

use Cms\Classes\ComponentBase;
use Carbon\Carbon;
use Famnms\SitewideNotification\Models\SitewideNotification;
use BackendAuth;

class ActiveNotifications extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Sitewide Notifications',
            'description' => 'The active sitewide notifications'
        ];
    }

    // public function defineProperties()
    // {
    //     return [
    //         'event_id' => [
    //             'title' => 'Event ID',
    //             'description' => 'The ID of the event to lookup',
    //             'type' => 'string'
    //         ]
    //     ];
    // }
    
    public function onRun() {
        $notifications = SitewideNotification::where('start_time', '<=', Carbon::now())
            ->where('end_time', '>=', Carbon::now())
            ->get();
    
        $this->page['notifications'] = $notifications;
    }
}
