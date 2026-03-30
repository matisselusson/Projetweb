<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\AppData;

class ProjectController extends Controller
{
    public function index()
    {
        $projets = AppData::projets();
        return view('projects.index', compact('projets'));
    }

    public function store(Request $request)
    {
        // Validation — équivalent de Gestion_projet.php
        $titre       = trim($request->input('titre', ''));
        $description = trim($request->input('description', ''));
        $statut      = trim($request->input('statut', ''));
        $priorite    = trim($request->input('priorite', ''));
        $assigne     = trim($request->input('assigne', ''));

        $erreurs = 0;

        if (strlen($titre) < 3)       $erreurs++;
        if (strlen($description) < 10) $erreurs++;
        if (strlen($assigne) < 1)      $erreurs++;

        if (!$erreurs) {
            // Sans base de données : on garde les données en session
            $projets   = session('projets', AppData::projets());
            $projets[] = compact('titre', 'description', 'statut', 'priorite', 'assigne');
            session(['projets' => $projets]);
        }

        return redirect()->route('projects.index');
    }

    public function show($id)
    {
        $projets = session('projets', AppData::projets());
        $projet  = $projets[$id] ?? null;
        return view('projects.show', compact('projet'));
    }
}
