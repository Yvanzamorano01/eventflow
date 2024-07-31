<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $events_count = Event::where('organizer_id', $user->id)->count();
        $tickets_sold = Ticket::where('user_id', $user->id)->count();
        $total_revenue = Ticket::where('user_id', $user->id)->sum('price');

        // Récupérer les 10 derniers achats de tickets et les grouper par utilisateur, type de billet, date et prix
        $recentPurchases = Ticket::with('event', 'user')
            ->where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(10)
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