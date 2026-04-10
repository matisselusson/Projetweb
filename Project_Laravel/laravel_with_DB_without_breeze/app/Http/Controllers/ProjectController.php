<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\AppData;
use App\Models\Projet;

class ProjectController extends Controller
{
    public function index()
    {
        $projets = Projet::all();
        return view('projects.index', compact('projets'));
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'titre'       => 'required|min:3',
        'description' => 'required|min:10',
        'statut'      => 'required',
        'priorite'    => 'required',
        'assigne'     => 'required|min:1',
    ]);

    Projet::create($validated);

    return redirect()->route('projects.index');
    }
    public function show($id)
    {
        $projets = Projet::all();
        $projet  = $projets[$id] ?? null;
        return view('projects.show', compact('projet'));
    }
}
