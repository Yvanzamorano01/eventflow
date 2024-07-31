<?php
// app/Policies/TicketPolicy.php

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the ticket.
     */
    public function update(User $user, Ticket $ticket): bool
    {
        return $user->id === $ticket->user_id;
    }

    /**
     * Determine whether the user can delete the ticket.
     */
    public function delete(User $user, Ticket $ticket): bool
    {
        return $user->id === $ticket->user_id;
    }
}