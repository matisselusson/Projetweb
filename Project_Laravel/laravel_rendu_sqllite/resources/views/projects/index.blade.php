@extends('layouts.app')

@section('title', 'Projet')

@section('content')
<section class="mySection">

  <section class="Modularecell">
    <h2>Fonction de trie</h2>

    <div class="form-group">
      <label for="status_trie">Status :</label>
      <select id="status_trie">
        <option value="tout" selected>Tout</option>
        <option value="Nouveau">Nouveau</option>
        <option value="En cours">En cours</option>
        <option value="En attente">En attente</option>
        <option value="Terminé">Terminé</option>
        <option value="À valider">À valider</option>
        <option value="Validé">Validé</option>
        <option value="Refusé">Refusé</option>
      </select>
    </div>

    <div class="form-group">
      <label for="client_trie">Client :</label>
      <select id="client_trie">
          <option value="tout" selected>Tout</option>
          @foreach ($clients as $cl)
            <option value="{{ $cl->name }}">{{ $cl->name }}</option>
          @endforeach
      </select>
    </div>
  </section>

  <section class="Modularecell">
    <table class="matable">
      <thead>
        <tr>
          <th>Titre</th>
          <th>Status</th>
          <th>Client</th>
          <th>Lien</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projets as $index => $pr)
          <tr>
            <td>{{ $pr['titre'] }}</td>
            <td>{{ $pr['statut'] }}</td>
            <td>{{ $pr->client->name }}</td>
            <td><a href="{{ route('projects.show', $pr['id']) }}">Edit</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>

</section>
@if(in_array($myuser->role, ['administrateur']))
<a href="{{ route('projects.create') }}" class="btn-floating-create" title="Créer un projet">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" 
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="12" y1="5" x2="12" y2="19"></line>
        <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>
</a>
@endif
@endsection

@push('scripts')
  <script src="{{ asset('JS/scriptprojet.js') }}"></script>
@endpush
