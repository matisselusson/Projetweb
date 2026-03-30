@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<section class="mySection">

  <h2>Statistique des tickets</h2>

  <div class="cell" id="tickettotal">
    <div class="title-cell">Nombre de tickets total</div>
    <div class="number-cell">90</div>
  </div>

  <div class="cell" id="ticketnouveau">
    <div class="title-cell">Tickets nouveaux</div>
    <div class="number-cell">12</div>
  </div>

  <div class="cell" id="ticketencours">
    <div class="title-cell">Tickets en cours</div>
    <div class="number-cell">25</div>
  </div>

  <div class="cell" id="ticketattenteclient">
    <div class="title-cell">Tickets en attente client</div>
    <div class="number-cell">6</div>
  </div>

  <div class="cell" id="tickettermine">
    <div class="title-cell">Tickets terminés</div>
    <div class="number-cell">40</div>
  </div>

  <div class="cell" id="ticketurgent">
    <div class="title-cell">Tickets à traiter en urgence</div>
    <div class="number-cell">5</div>
  </div>

</section>
@endsection
