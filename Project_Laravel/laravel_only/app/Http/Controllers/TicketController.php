<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\AppData;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = AppData::tickets();
        $projets = AppData::projets();
        return view('tickets.index', compact('tickets', 'projets'));
    }

    public function store(Request $request)
    {
        // Validation — équivalent de Gestion_ticket.php
        $titre       = trim($request->input('titre', ''));
        $description = trim($request->input('description', ''));
        $statut      = trim($request->input('statut', ''));
        $priorite    = trim($request->input('priorite', ''));
        $type        = trim($request->input('type', ''));
        $projet      = trim($request->input('projet', ''));
        $assigne     = trim($request->input('assigne', ''));

        $erreurs = 0;

        if (strlen($titre) < 3)        $erreurs++;
        if (strlen($description) < 10)  $erreurs++;
        if (strlen($assigne) < 1)       $erreurs++;

        if (!$erreurs) {
            // Sans base de données : on garde les données en session
            $tickets   = session('tickets', AppData::tickets());
            $tickets[] = compact('titre', 'description', 'statut', 'priorite', 'type', 'projet', 'assigne');
            session(['tickets' => $tickets]);
        }

        return redirect()->route('tickets.index');
    }

    public function show($id)
    {
        $tickets = session('tickets', AppData::tickets());
        $ticket  = $tickets[$id] ?? null;
        return view('tickets.show', compact('ticket'));
    }
}
