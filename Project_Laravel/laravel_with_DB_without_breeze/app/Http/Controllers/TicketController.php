<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;
use App\Models\Projet;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        $projets = Projet::all();
        return view('tickets.index', compact('tickets', 'projets'));
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'titre'       => 'required|min:3',
        'description' => 'required|min:10',
        'statut'      => 'required',
        'priorite'    => 'required',
        'type'        => 'required',
        'projet_id'   => 'required|exists:projets,id',
        'assigne'     => 'required|min:1',
    ]);

    Ticket::create($validated);

    return redirect()->route('tickets.index');
    }

    public function show($id)
    {
        $tickets = Ticket::all();
        $ticket  = $tickets[$id];
        return view('tickets.show', compact('ticket'));
    }
}
