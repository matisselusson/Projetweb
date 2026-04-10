@extends('layouts.app')

@section('title', 'Tableau de bord')


@section('content')


<section class="mySection">


  <section class="Modularecell">
    <h2>Fonction de trie</h2>

    <div class="form-group">
      <label for="status_trie">Status :</label>
      <select id="status_trie">
        <option value="tout" selected>Tout</option>
        <option value="nouveau">Nouveau</option>
        <option value="encours">En cours</option>
        <option value="attente">En attente client</option>
        <option value="termine">Terminé</option>
        <option value="valider">À valider (client)</option>
        <option value="valide">Validé</option>
        <option value="refuse">Refusé</option>
      </select>
    </div>

    <div class="form-group">
      <label for="priority_trie">Priorité</label>
      <select id="priority_trie">
        <option value="tout" selected>Tout</option>
        <option value="A évalué">A évalué</option>
        <option value="Faible">Faible</option>
        <option value="Moyenne">Moyenne</option>
        <option value="Haute">Haute</option>
        <option value="Critique">Critique</option>
      </select>
    </div>

    <div class="form-group">
      <label for="type_trie">Type</label>
      <select id="type_trie">
        <option value="tout" selected>Tout</option>
        <option value="Inclus">Inclus</option>
        <option value="Facturable">Facturable</option>
      </select>
    </div>

    <div class="form-group">
      <label for="projet_trie">Projet</label>
      <select id="projet_trie">
        <option value="tout" selected>Tout</option>
        @foreach ($projets as $pr)
          <option value="{{ $pr->id }}">{{ $pr->titre }}</option>
        @endforeach
      </select>
    </div>
  </section>

  <section class="Modularecell">
    <table class="matable">
      <thead>
        <tr class="head">
          <th>Titre</th>
          <th>Priorité</th>
          <th>Status</th>
          <th>Type</th>
          <th>Projet</th>
          <th>Assigné à</th>
          <th>Lien</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tickets as $tk)
          <tr>
            <td>{{ $tk->titre }}</td>
            <td>{{ $tk->priorite }}</td>
            <td>{{ $tk->statut }}</td>
            <td>{{ $tk->type }}</td>
            <td>{{ $tk->projet->titre }}</td>
            <td>{{ $tk->assignee->pluck('name')->implode(', ')  }}</td>
            <td><a href="{{ route('tickets.show', $tk->id) }}">Edit</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>

</section>
@if(in_array($myuser->role, ['administrateur', 'collaborateur']))
<a href="{{ route('tickets.create') }}" class="btn-floating-create" title="Créer un ticket">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" 
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="12" y1="5" x2="12" y2="19"></line>
        <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>
</a>
@endif
@endsection

@push('scripts')
  <script src="{{ asset('JS/scriptticket.js') }}"></script>
@endpush
