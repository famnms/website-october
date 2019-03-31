<?php namespace Famnms\Discord\Classes;

use October\Rain\Support\Traits\Singleton;
use Famnms\Discord\Models\Settings;

use \DiscordWebhooks\Client;
use \DiscordWebhooks\Embed;

class DiscordInterface {
    use Singleton;

    public static function sendBasicMessage($message) {
        $webhook = new Client(Settings::get('webhook_url'));
        $embed = new Embed();

        $webhook->message($message);
        $webhook->send();
    }

    public static function getClient() {
        return new Client(Settings::get('webhook_url'));
    }
}