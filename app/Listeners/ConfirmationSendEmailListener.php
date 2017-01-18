<?php

namespace Serman\Listeners;

use Serman\Events\TaskCreatedEvent;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmationSendEmailListener implements ShouldQueue
{
    public $mailer;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  TaskCreatedEvent  $event
     * @return void
     */
    public function handle(TaskCreatedEvent $event)
    {
        $message = 'Ola Josh, como vai essa força ai???';

        $this->mailer->raw($message, function($m) use ($event) {
            $m->from('msartini@gmail.com', 'Marcio Sartini');
            $m->to('msartini@gmail.com', 'TEste de email');
        });
        return 'email enviado mane';
    }
}
