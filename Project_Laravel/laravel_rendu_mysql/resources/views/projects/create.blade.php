@extends('layouts.app')

@section('title', 'Créer un Projet')

@section('content')
<section class="mySection">

  <section class="Modularecell">
    <h1>Créer un projet</h1>
    <form class="form_question" id="projectForm" method="POST" action="{{ route('projects.store') }}">
      @csrf

      <div class="form-group">
        <label for="title">Titre</label>
        <input
          type="text"
          id="title"
          placeholder="Décrire le projet en une phrase"
          name="titre"

        />
        @error('titre')
            <p class="error-message titanic" style="display:block;">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea
          id="description"
          placeholder="Décrivez le projet en détail..."
          name="description"
        ></textarea>
        @error('description')
            <p class="error-message titanic" style="display:block;">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="status">Statut</label>
        <select id="status" name="statut" required>
          <option value="Nouveau" selected>Nouveau</option>
          <option value="En cours">En cours</option>
          <option value="En attente">En attente</option>
          <option value="Terminé">Terminé</option>
          <option value="À valider">À valider</option>
          <option value="Validé">Validé</option>
          <option value="Refusé">Refusé</option>
        </select>
      </div>

      <div class="form-group">
        <label for="client_id">Client concerné</label>
        <select id="client_id" name="client_id" required>
          <option value="" disabled selected>Sélectionnez un client</option>
          @foreach ($clients as $cl)
            <option value="{{ $cl->id }}">{{ $cl->name }}</option>
          @endforeach
        </select>
        @error('client_id')
            <p class="error-message titanic" style="display:block;">{{ $message }}</p>
        @enderror
      </div>

      <div class="actions">
        <a href="{{ route('projects.index') }}" class="cancel" style="text-decoration: none; display: flex; align-items: center; justify-content: center;">Annuler</a>
        <button type="submit" class="submit">Créer le projet</button>
      </div>
    </form>
  </section>

</section>
@endsection