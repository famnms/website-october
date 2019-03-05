<?php namespace Famnms\Events;
//namespace Famnms\Events\Components;
//use Famnms\Events\Components\EventOverview;
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

    public function registerSettings()
    {
    }
}
