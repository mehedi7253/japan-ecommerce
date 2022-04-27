<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider {
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class                 => [
            SendEmailVerificationNotification::class,
        ],
        'Illuminate\Auth\Events\Verified' => [
            'App\Listeners\SendWelcomeNotification',
        ],
        'App\Events\OrderPlaced'          => [
            'App\Listeners\SendOrderPlacedNotification',
        ],
        'App\Events\OrderUpdated'         => [
            'App\Listeners\SendOrderUpdateNotification',
        ],
        'App\Events\AssignDeliveryBoy'    => [
            'App\Listeners\SendDeliveryBoyNotification',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot() {
        parent::boot();

        //
    }
}
