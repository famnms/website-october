<?php namespace Famnms\Events;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['Famnms.Members'];
    public function registerComponents()
    {
        return [
            '\Famnms\Events\Components\EventOverview' => 'eventOverview',
            '\Famnms\Events\Components\EventDetail' => 'eventDetail'
        ];
    }

    public function registerPermissions()
    {
		return [
    		'famnms.events.can_create_events' => [
        		'tab' => 'famnms.events::lang.plugin.name',
				'label' => 'Can Create Events'
			],
    		'famnms.events.can_view_events' => [
        		'tab' => 'famnms.events::lang.plugin.name',
        		'label' => 'Can View Events'
			],
    		'famnms.events.can_create_event_types' => [
        		'tab' => 'famnms.events::lang.plugin.name',
        		'label' => 'Can Create Event Types'
			]
		];
    }

    public function registerSettings()
    {
    }

    public function boot() {
        // \App::register('Barryvdh\DomPDF\ServiceProvider::class');
    }
}
