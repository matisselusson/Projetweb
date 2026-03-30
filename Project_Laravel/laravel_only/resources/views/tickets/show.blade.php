@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<section class="mySectionticket">

  <div class="cell" id="ticket_title">
    <div class="title-cell">Titre</div>
    <div class="number-cell">{{ $ticket['titre'] ?? 'Erreur page login' }}</div>
  </div>

  <div class="cell" id="id_ticket">
    <div class="title-cell">Description</div>
    <div class="number-cell">{{ $ticket['description'] ?? 'Les collaborateurs de Paris ne peuvent pas se connecter' }}</div>
  </div>

  <div class="cell" id="ticket_priority">
    <div class="title-cell">Priorité</div>
    <div class="number-cell">{{ $ticket['priorite'] ?? 'Haute' }}</div>
  </div>

  <div class="cell" id="ticket_status">
    <div class="title-cell">Statut</div>
    <div class="number-cell">{{ $ticket['statut'] ?? 'Ouvert' }}</div>
  </div>

  <div class="cell" id="ticket_assignee">
    <div class="title-cell">Assigné à</div>
    <div class="number-cell">{{ $ticket['assigne'] ?? 'Marie' }}</div>
  </div>

</section>
@endsection
