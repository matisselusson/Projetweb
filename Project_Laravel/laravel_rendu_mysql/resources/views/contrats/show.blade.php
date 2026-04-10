@extends('layouts.app')

@section('title', 'Contrat — {{ $contrat->projet->titre }}')

@section('content')
<section class="mySection">

  <div class="cell" id="ticket_client">
    <div class="title-cell">Projet</div>
    <div class="number-cell">{{ $contrat->projet->titre }}</div>
  </div>

  <div class="cell" id="ticket_title">
    <div class="title-cell">Heures incluses</div>
    <div class="number-cell">{{ $contrat->hours_included }} h</div>
  </div>

  <div class="cell" id="ticket_category">
    <div class="title-cell">Taux horaire</div>
    <div class="number-cell">{{ number_format($contrat->hourly_rate, 2) }} €</div>
  </div>

  <div class="cell" id="ticket_status">
    <div class="title-cell">Montant total</div>
    <div class="number-cell">{{ number_format($contrat->hours_included * $contrat->hourly_rate, 2) }} €</div>
  </div>

  <div class="cell" id="ticket_category">
    <div class="title-cell">Date de début</div>
    <div class="number-cell">{{ $contrat->start_date ?? '—' }}</div>
  </div>

  <div class="cell" id="ticket_priority">
    <div class="title-cell">Date de fin</div>
    <div class="number-cell">{{ $contrat->end_date ?? '—' }}</div>
  </div>


</section>
@endsection