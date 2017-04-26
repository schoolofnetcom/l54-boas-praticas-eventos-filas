<?php

namespace App\Observers;


class UserObserver
{
    public function creating($user)
    {
        \Log::info("User {$user->email} will be registered");
    }

    public function created($user)
    {
        //\Mail::to($user)->send(new UserRegistered($user));
        \Log::info("User {$user->email} was registered");
    }

    public function updating($user)
    {
        \Log::info("User {$user->email} will be updated");
    }

    public function updated($user)
    {
        \Log::info("User {$user->email} was updated");
    }

    public function saving($user)
    {
        \Log::info("User {$user->email} will be saved");
    }

    public function saved($user)
    {
        \Log::info("User {$user->email} was salved");
    }
}