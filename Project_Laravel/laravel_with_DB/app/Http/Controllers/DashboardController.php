<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total'          => Ticket::count(),
            'nouveau'        => Ticket::where('statut', 'Nouveau')->count(),
            'en_cours'       => Ticket::where('statut', 'En cours')->count(),
            'attente_client' => Ticket::where('statut', 'En attente client')->count(),
            'termine'        => Ticket::where('statut', 'Terminé')->count(),
            'urgent'         => Ticket::where('priorite', 'Critique')->count(),
        ];

        return view('dashboard', compact('stats'));
    }
}
