<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use App\Models\Projet;
use App\Models\Client;

class DashboardController extends Controller
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
            $clients = Client::all();
            $projets = Projet::all();
            $tickets = Ticket::all();
        }    
        if($myuser->role != 'administrateur' and $clients->isEmpty()){
            $clients_name="Aucun client n'est lié à votre compte.";
        }
        else{
            $clients_name=$clients->pluck('name')->join(', ');
        }
        $stats = [
            'total'          =>  $tickets->count(),
            'nouveau'        =>  $tickets->where('statut', 'Nouveau')->count(),
            'en_cours'       =>  $tickets->where('statut', 'En cours')->count(),
            'attente_client' =>  $tickets->where('statut', 'En attente client')->count(),
            'termine'        =>  $tickets->where('statut', 'Terminé')->count(),
            'urgent'         =>  $tickets->where('priorite', 'Critique')->count(),
            'nb_projet'      =>  $projets->count(),
            'client_name'    =>  $clients_name,
        ];

        //dd($stats);

        return view('dashboard', compact('stats'));
    }
}
