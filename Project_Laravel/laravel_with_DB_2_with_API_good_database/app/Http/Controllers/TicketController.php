<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Projet;
use App\Models\User;
use App\Models\Myuser;
use App\Models\Client;

class TicketController extends Controller
{


    public function index()
    {
        $user   = auth()->user();
        
        $myuser = $user->myuser;
        
        if($myuser->role != 'administrateur'){
            $clients=$myuser->clients;
            $projets = Projet::whereIn('client_id',$clients->pluck('id'))->get();
            $tickets = Ticket::whereIn('projet_id', $projets->pluck('id'))->get();


        }
        else{
            $projets = Projet::all();
            $tickets = Ticket::all();
        }
        
        return view('tickets.index', compact('tickets', 'projets','myuser'));
    }

    public function create()
    {
        $user = auth()->user();
        $myuser = $user->myuser;
        $clients=$myuser->clients;
        if ($myuser->role === 'administrateur') {
            $projets = Projet::all();
        }
        elseif(($myuser->role === 'client')){
                        
            $clients=$myuser->clients;
            $projets = Projet::whereIn('client_id',$clients->pluck('id'))->get();
            $tickets = Ticket::whereIn('projet_id', $projets->pluck('id'))->get();
            return view('tickets.index', compact('tickets', 'projets'));

        }
        else {
            $projets = Projet::whereIn('client_id',$clients->pluck('id'))->get();
        }
        return view('tickets.create', compact('projets'));
    }

    public function create2(Request $request)
    {
        $validated = $request->validate([
            'titre'       => 'required|min:3',
            'description' => 'required|min:10',
            'statut'      => 'required',
            'priorite'    => 'required',
            'type'        => 'required',
            'projet_id'   => 'required|exists:projets,id',
        ]);

        $validated['created_by'] = auth()->id();

        session()->put('validated', $validated);

        $client = Client::where('id', $validated['projet_id'])->first();

        $users = $client->myusers()
            ->with('user')
            ->get()
            ->map(fn($myuser) => [
                'myuser_id' => $myuser->id,
                'name'      => $myuser->user->name,
            ]);

        return view('tickets.create2', compact('users', 'validated'));
    }

    public function store(Request $request)
    {
        $validated = session('validated');

        
        $ticket=Ticket::create($validated);

        $ticket->assignee()->attach($request->input('assigne'));


        session()->forget('validated');

        return redirect()->route('tickets.index');
    }



    public function show($id)
    {
        $user = auth()->user();
        $myuser = $user->myuser;
        $ticket  = Ticket::with(['projet', 'creator', 'assignee'])->findOrFail($id);
        return view('tickets.show', compact('ticket','myuser'));
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

        $validated['created_by'] = auth()->id();
        $ticket = Ticket::create($validated);

        return response()->json([
            'message' => 'Ticket créé avec succès.',
            'ticket'  => [
                'id'          => $ticket->id,
                'titre'       => $ticket->titre,
                'description' => $ticket->description,
                'priorite'    => $ticket->priorite,
                'statut'      => $ticket->statut,
                'type'        => $ticket->type,
                'assigned_to' => $ticket->assigned_to,
                'projet_nom'  => $ticket->projet->titre, 
            ],
        ], 201);
    }
    public function showApi()
    {
        $tickets = Ticket::with('projet')->get();
        return response()->json($tickets, 200);
    }
}
