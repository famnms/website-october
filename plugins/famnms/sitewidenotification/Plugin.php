<?php namespace Famnms\SitewideNotification;

use System\Classes\PluginBase;
use Backend;
use Carbon\Carbon;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\Famnms\SitewideNotification\Components\ActiveNotifications' => 'activeNotifications'
        ];
    }

    public function registerSettings()
    {
        return [
            'SitewideNotification' => [
                'label'         => 'Sitewide Notifications',
                'description'   => 'Manage settings related to Sitewide Notifications',
                'category'      => 'FAMNMS',
                'url'           => Backend::url('famnms/sitewidenotification'),
                'icon'          => 'oc-icon-exclamation'
            ]
            ];
    }
}
