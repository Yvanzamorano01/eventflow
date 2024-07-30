<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'event_date',
        'location',
        'organizer_id',
        'ticket_limit',
    ];

    protected $casts = [
        'event_date' => 'datetime',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function ticketTypes()
    {
        return $this->hasMany(TicketType::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($event) {
            $event->ticketTypes()->each(function ($ticketType) {
                $ticketType->delete();
            });
        });
    }
}
