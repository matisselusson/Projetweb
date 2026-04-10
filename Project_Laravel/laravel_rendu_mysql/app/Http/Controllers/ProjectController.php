<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\AppData;
use App\Models\Projet;
use App\Models\Client;

class ProjectController extends Controller
{
    public function index()
    {
        $user   = auth()->user();
        
        $myuser = $user->myuser;


        if($myuser->role != 'administrateur'){
            $projets = Projet::whereIn('client_id', $myuser->clients->pluck('id'))->with('client')->get();
            $clients = Client::whereIn('id', $myuser->clients->pluck('id'))->get();
        }
        else{
            $projets = Projet::all();
            $clients = Client::all();
        }
        return view('projects.index', compact('projets','clients','myuser'));
    }

    public function create()
    {
        $user = auth()->user();
        $myuser = $user->myuser;

        if ($myuser->role === 'administrateur') {
            $clients = Client::all();
        }
        elseif($myuser->role === 'collaborateur'){
            $projets = Projet::whereIn('client_id', $myuser->clients->pluck('id'))->with('client')->get();
            $clients = Client::whereIn('id', $myuser->clients->pluck('id'))->get();
            return view('projects.index', compact('projets','clients'));
        }
        else {
            $clients = $myuser->clients;
        }

        return view('projects.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre'       => 'required|min:3',
            'description' => 'required|min:10',
            'statut'      => 'required',
            'client_id'   => 'required|exists:clients,id',
        ]);

        Projet::create($validated);

        return redirect()->route('projects.index');
    }
    public function show($id)
    {
        $projet  = Projet::with(['client', 'tickets', 'contract'])->findOrFail($id);
        return view('projects.show', compact('projet'));
    }
}
