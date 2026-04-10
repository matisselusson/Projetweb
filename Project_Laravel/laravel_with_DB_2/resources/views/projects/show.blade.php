@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<section class="mySection">

  <div class="cell" id="ticket_title">
    <div class="title-cell">Titre</div>
    <div class="number-cell">{{ $projet['titre'] ?? 'Ajouter bouton "Exporter"' }}</div>
  </div>

  <div class="cell" id="id_ticket">
    <div class="title-cell">Description</div>
    <div class="number-cell">{{ $projet['description'] ?? 'Il manque un bouton exporter pour le formulaire A38' }}</div>
  </div>

  <div class="cell" id="ticket_priority">
    <div class="title-cell">Priorité</div>
    <div class="number-cell">{{ $projet['priorite'] ?? 'Moyenne' }}</div>
  </div>

  <div class="cell" id="ticket_status">
    <div class="title-cell">Statut</div>
    <div class="number-cell">{{ $projet['statut'] ?? 'En cours' }}</div>
  </div>

  <div class="cell" id="ticket_assignee">
    <div class="title-cell">Assigné à</div>
    <div class="number-cell">{{ $projet['assigne'] ?? 'Alex' }}</div>
  </div>

</section>
@endsection
