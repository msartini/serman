<?php

namespace Serman\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Serman\Events\TaskCreatedEvent' => [
            'Serman\Listeners\ConfirmationSendEmailListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Event::listen(['task.saved'], function () {
            var_dump('teste');
            return 'ola';
        });



        //
    }
}
