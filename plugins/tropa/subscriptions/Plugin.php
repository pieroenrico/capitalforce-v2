<?php namespace Tropa\Subscriptions;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Tropa\Subscriptions\Components\SubscriptionForm' => 'subscriptionform',
        ];
    }

    public function registerSettings()
    {
    }
}
