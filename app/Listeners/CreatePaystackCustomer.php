<?php

namespace App\Listeners;

use App\Events\NewUserCreated;
use App\Models\PayStack\Transaction;
use App\Models\PayStack\Customer as PayStackCustomer;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreatePaystackCustomer
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserCreated  $event
     * @return void
     */
    public function handle(NewUserCreated $event)
    {
       $user = $event->user;

       //Create a PaystackCustomer instance, linking the authenticated user and their paystack customer code
       $paystackCustomer = (new PayStackCustomer())->createPayStackCustomer($user);
    }
}
