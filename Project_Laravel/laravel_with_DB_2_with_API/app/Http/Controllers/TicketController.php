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

    public function storeApi(Request $request)
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

        $ticket = Ticket::create($validated);

        $projet = Projet::find($validated['projet_id']);

        return response()->json([
            'message' => 'Ticket créé avec succès.',
            'ticket'  => [
                'id'          => $ticket->id,
                'titre'       => $ticket->titre,
                'description' => $ticket->description,
                'priorite'    => $ticket->priorite,
                'statut'      => $ticket->statut,
                'type'        => $ticket->type,
                'assigne'     => $ticket->assigne,
                'projet_nom'  => $projet->titre,
            ],
        ], 201);
    }
    public function showApi()
    {
        $tickets = Ticket::with('projet')->get();
        return response()->json($tickets, 200);
    }
}
