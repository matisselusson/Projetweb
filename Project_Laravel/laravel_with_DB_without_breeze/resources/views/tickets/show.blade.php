@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<section class="mySectionticket">

  <div class="cell" id="ticket_title">
    <div class="title-cell">Titre</div>
    <div class="number-cell">{{ $ticket['titre'] ?? 'marche pas' }}</div>
  </div>

  <div class="cell" id="id_ticket">
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
    <div class="number-cell">{{ $ticket['assigne'] ?? 'marche pas' }}</div>
  </div>

</section>
@endsection
