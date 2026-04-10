@extends('layouts.app')

@section('title', 'Tableau de bord')


@section('content')


<section class="mySection">

  <section class="Modularecell">
    <h1>Créer un ticket</h1>
    <form class="form_question" id="ticketForm" method="POST" action="{{ route('tickets.create2') }}">
      @csrf

      <div class="form-group">
        <label for="title">Titre</label>
        <input
          type="text"
          id="title"
          placeholder="Décrire le problème en une phrase"
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
          placeholder="Décrivez le problème en détail..."
          name="description"
        ></textarea>
        @error('description')
            <p class="error-message titanic" style="display:block;">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="status">Statut</label>
        <select id="status" name="statut" required>
          <option value="nouveau" selected>Nouveau</option>
          <option value="encours">En cours</option>
          <option value="attente">En attente client</option>
          <option value="termine">Terminé</option>
          <option value="valider">À valider (client)</option>
          <option value="valide">Validé</option>
          <option value="refuse">Refusé</option>
        </select>
        </div>
        <div class="form-group">
          <label for="priority">Priorité</label>
          <select id="priority" name="priorite">
            <option value="A évalué" selected>A évalué</option>
            <option value="faible">Faible</option>
            <option value="moyenne">Moyenne</option>
            <option value="haute">Haute</option>
            <option value="urgent">Urgent</option>
          </select>

      </div>

      <div class="form-group">
        <label for="type">Type</label>
        <select id="type" name="type" required>
          <option value="inclus" selected>Inclus</option>
          <option value="facturable">Facturable</option>
        </select>
      </div>
        <div class="form-group">
          <label for="projet">Projet</label>
          <select id="projet" name="projet_id" required>
         @foreach ($projets as $pr)
            <option value="{{ $pr->id }}">{{ $pr->titre }}</option>
          @endforeach
            </select>
      </div>


      <div class="actions">
        <a href="{{ route('tickets.index') }}" class="cancel" style="text-decoration: none; display: flex; align-items: center; justify-content: center;">Annuler</a>
        <button type="submit" class="submit">Créer le projet</button>
      </div>
    </form>
  </section>

@endsection
@push('scripts')
  <script src="{{ asset('JS/scriptticket.js') }}"></script>
@endpush
