<?php namespace Famnms\Discord;

use System\Classes\PluginBase;

use Backend;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
            'discord' => [
                'label'         => 'Discord',
                'description'   => 'Manage settings related to Discord',
                'category'      => 'FAMNMS',
                'class'         => 'Famnms\Discord\Models\Settings',
                'icon'          => 'oc-icon-comment'
            ]
            ];
    }
}
