@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<section class="mySectionticket">

  <div class="cell" id="ticket_title">
    <div class="title-cell">Titre</div>
    <div class="number-cell">{{ $ticket['titre'] ?? 'marche pas' }}</div>
  </div>

  <div class="cell" id="ticket_category">
    <div class="title-cell">Description</div>
    <div class="number-cell">{{ $ticket['description'] ?? 'marche pas' }}</div>
  </div>

  <div class="cell" id="ticket_priority">
    <div class="title-cell">Priorité</div>
    <div class="number-cell">{{ $ticket['priorite'] ?? 'marche pas' }}</div>
  </div>

  <div class="cell" id="ticket_status">
    <div class="title-cell">Statut</div>
    <div class="number-cell">{{ $ticket['statut'] ?? 'marche pas' }}</div>
  </div>

  <div class="cell" id="ticket_assignee">
    <div class="title-cell">Assigné à</div>
   <div class="number-cell">{{ $ticket->assignee->pluck('name')->join(', ')  ?? 'marche pas'}}</div>
  </div>

  <div class="cell" id="ticket_title">
    <div class="title-cell">Créateur</div>
    <div class="number-cell">{{ $use->name ?? 'marche pas' }}</div>
  </div>

    <div class="cell" id="ticket_date">
    <div class="title-cell">Type</div>
    <div class="number-cell">{{ $ticket['type'] ?? 'marche pas' }}</div>
  </div>

  <div class="cell" id="ticket_type">
    <div class="title-cell">Projet liée</div>
    <div class="number-cell">{{ $ticket->projet->titre ?? 'marche pas' }}</div>
  </div>

</section>
@endsection
