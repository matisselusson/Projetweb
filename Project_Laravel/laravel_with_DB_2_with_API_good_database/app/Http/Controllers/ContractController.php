<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Projet;

class ContractController extends Controller
{
    public function index()
    {
        $user   = auth()->user();
        $myuser = $user->myuser;
        if($myuser->role != 'administrateur'){
            $projets  = Projet::whereIn('client_id', $myuser->clients->pluck('id'))->get();
            $contrats = Contract::whereIn('projet_id', $projets->pluck('id'))->with('projet')->get();

        }
        else{
            $contrats = Contract::all();
        }
        return view('contrats.index', compact('contrats','myuser'));
    }

    public function create()
    {
        $projets = Projet::whereDoesntHave('contract')->get();
        return view('contrats.create', compact('projets'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([         
            'projet_id'      => 'required|exists:projets,id|unique:contracts,projet_id',
            'hours_included' => 'required|integer|min:0',
            'hourly_rate'    => 'required|numeric|min:0',
            'start_date'     => 'nullable|date',
            'end_date'       => 'nullable|date|after_or_equal:start_date',
            ]);
        Contract::create($validated);
        return redirect()->route('contrats.index');
    }

    public function show($id)
    {
        $contrat = Contract::with('projet')->findOrFail($id);
        return view('contrats.show',compact('contrat'));
    }

    public function destroy($id)
    {
        Contract::findOrFail($id)->delete();
        return redirect()->route('contrats.index');
    }
}