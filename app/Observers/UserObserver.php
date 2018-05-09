<?php

namespace App\Observers;

use App\User;
use Log;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        Log::info($user->email . ' email of user created');
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleting(User $user)
    {
        Log::info($user->email . ' email of user deleted');
    }
}