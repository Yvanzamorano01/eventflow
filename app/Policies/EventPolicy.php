<?php
// app/Policies/EventPolicy.php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the event.
     */
    public function update(User $user, Event $event): bool
    {
        return $user->id === $event->organizer_id;
    }

    /**
     * Determine whether the user can delete the event.
     */
    public function delete(User $user, Event $event): bool
    {
        return $user->id === $event->organizer_id;
    }
}