<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Mail\Mailer;
use App\Models\User;

class RegisteredListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    private $mailer;
    private $eloquent;

    public function __construct(Mailer $mailer, User $eloquent)
    {
        $this->mailer = $mailer;
        $this->eloquent = $eloquent;
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());
        $this->mailer->raw('Your membership registration has been completed!', function ($message) use ($user) {
            $message->subject('Membership Registration Email')->to($user->email);
        });
    }

}
