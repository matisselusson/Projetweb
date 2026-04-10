@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
    <section class="mySection">
        <h2>Statistique globale</h2>
        <div class="cell" id="tickettotal">
            <div class="title-cell">Nombre de tickets total</div>
            <div class="number-cell">{{ $stats['total'] }}</div>
        </div>
        <div class="cell" id="ticketnouveau">
            <div class="title-cell">Tickets nouveaux</div>
            <div class="number-cell">{{ $stats['nouveau'] }}</div>
        </div>
        <div class="cell" id="ticketencours">
            <div class="title-cell">Tickets en cours</div>
            <div class="number-cell">{{ $stats['en_cours'] }}</div>
        </div>
        <div class="cell" id="ticketattenteclient">
            <div class="title-cell">Tickets en attente client</div>
            <div class="number-cell">{{ $stats['attente_client'] }}</div>
        </div>
        <div class="cell" id="tickettermine">
            <div class="title-cell">Tickets terminés</div>
            <div class="number-cell">{{ $stats['termine'] }}</div>
        </div>
        <div class="cell" id="ticketurgent">
            <div class="title-cell">Tickets à traiter en urgence</div>
            <div class="number-cell">{{ $stats['urgent'] }}</div>
        </div>

        <div class="cell" id="ticketurgent">
            <div class="title-cell">Nombre de projets total</div>
            <div class="number-cell">{{ $stats['nb_projet'] }}</div>
        </div>

        <div class="cell" id="ticketurgent">
            <div class="title-cell">Noms des clients</div>
            <div class="number-cell">{{ $stats['client_name'] ?? aucun}}</div>
        </div>
    </section>
@endsection