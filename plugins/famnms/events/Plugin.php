<?php namespace Famnms\Events;
//namespace Famnms\Events\Components;
//use Famnms\Events\Components\EventOverview;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\Famnms\Events\Components\EventOverview' => 'eventOverview'
        ];
    }

    public function registerSettings()
    {
    }
}
