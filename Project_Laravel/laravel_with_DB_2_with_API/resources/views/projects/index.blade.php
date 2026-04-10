@extends('layouts.app')

@section('title', 'Tableau de bord')

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
          placeholder="Décrire le problème en une phrase"
          name="titre"
        />
        <p id="title_error" class="error-message titanic">Le titre est obligatoire. Il faut minimum 3 caractères.</p>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea
          id="description"
          placeholder="Décrivez le problème en détail..."
          name="description"
        ></textarea>
        <p id="description_error" class="error-message titanic">La description est obligatoire. Il faut minimum 10 caractères.</p>
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

        <div class="form-group">
          <label for="priority">Priorité</label>
          <select id="priority" name="priorite">
            <option value="A évalué" selected>A évalué</option>
            <option value="faible">Faible</option>
            <option value="moyenne">Moyenne</option>
            <option value="haute">Haute</option>
            <option value="Critique">Critique</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="assignes">Collaborateurs assignés</label>
        <input
          type="text"
          id="assignes"
          placeholder="Ex: Marie, Alex, Thomas"
          name="assigne"
        />
        <p id="assignes_error" class="error-message titanic">Veuillez assigner au moins un collaborateur</p>
      </div>

      <div class="actions">
        <button type="reset" class="cancel">Annuler</button>
        <button type="submit" class="submit">Créer le projet</button>
      </div>
    </form>
  </section>

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
  </section>

  <section class="Modularecell">
    <table class="matable">
      <thead>
        <tr>
          <th>Titre</th>
          <th>Priorité</th>
          <th>Status</th>
          <th>Assigné à</th>
          <th>Lien</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projets as $index => $pr)
          <tr>
            <td>{{ $pr['titre'] }}</td>
            <td>{{ $pr['priorite'] }}</td>
            <td>{{ $pr['statut'] }}</td>
            <td>{{ $pr['assigne'] }}</td>
            <td><a href="{{ route('projects.show', $index) }}">Edit</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>

</section>
@endsection

@push('scripts')
  <script src="{{ asset('JS/scriptprojet.js') }}"></script>
@endpush
