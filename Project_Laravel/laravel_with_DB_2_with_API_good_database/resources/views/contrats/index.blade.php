@extends('layouts.app')

@section('title', 'Contrats')

@section('content')
<section class="mySection">

  <section class="Modularecell">
    <table class="matable">
      <thead>
        <tr>
          <th>Projet</th>
          <th>Heures incluses</th>
          <th>Taux horaire</th>
          <th>Date début</th>
          <th>Date fin</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contrats as $contrat)
          <tr>
            <td>{{ $contrat->projet->titre }}</td>
            <td>{{ $contrat->hours_included }} h</td>
            <td>{{ number_format($contrat->hourly_rate, 2) }} €</td>
            <td>{{ $contrat->start_date ?? '—' }}</td>
            <td>{{ $contrat->end_date   ?? '—' }}</td>
            <td><a href="{{ route('contrats.show', $contrat->id) }}">Voir</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>

</section>
@if(in_array($myuser->role, ['administrateur']))
<a href="{{ route('contrats.create') }}" class="btn-floating-create" title="Créer un contrat">
  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
       fill="none" stroke="currentColor" stroke-width="2"
       stroke-linecap="round" stroke-linejoin="round">
    <line x1="12" y1="5" x2="12" y2="19"></line>
    <line x1="5"  y1="12" x2="19" y2="12"></line>
  </svg>
</a>
@endif
@endsection