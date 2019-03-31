<?php namespace Famnms\Discord\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // Unique code
    public $settingsCode = 'famnms_discord_settings';

    // Field config
    public $settingsFields = 'fields.yaml';
}