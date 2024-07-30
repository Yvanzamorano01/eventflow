<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Support\Collection;

class DashboardController extends Controller
{
    public function index()
    {
        $events_count = Event::count();
        $tickets_sold = Ticket::count();
        $total_revenue = Ticket::sum('price');

        // Récupérer les 3 derniers achats de tickets et les grouper par utilisateur, type de billet, date et prix
        $recentPurchases = Ticket::with('event', 'user')
            ->orderBy('created_at', 'desc')
            ->take(10) // prendre un nombre plus élevé pour avoir suffisamment de données pour le regroupement
            ->get()
            ->groupBy(function ($ticket) {
                return $ticket->user_id . '-' . $ticket->type . '-' . $ticket->created_at->format('Y-m-d H:i');
            })
            ->map(function (Collection $group) {
                $first = $group->first();
                return [
                    'user' => $first->user,
                    'type' => $first->type,
                    'total_tickets' => $group->count(),
                    'total_price' => $group->sum('price'),
                    'phone' => $first->user->phone,
                    'created_at' => $first->created_at,
                ];
            });

        return view('dashboard.dashboard', compact('events_count', 'tickets_sold', 'total_revenue', 'recentPurchases'));
    }
}
