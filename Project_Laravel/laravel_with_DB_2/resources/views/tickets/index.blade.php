@extends('layouts.app')

@section('title', 'Tableau de bord')


@section('content')


<section class="mySection">

  <section class="Modularecell">
    <h1>Créer un ticket</h1>
    <form class="form_question" id="ticketForm" method="POST" action="{{ route('tickets.store') }}">
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
        
      </div>

      <div class="form-group">
        <label for="assigne">Collaborateurs assignés</label>
        <input
          type="text"
          id="assigne"
          placeholder="Ex: Marie, Alex, Thomas"
          name="assigne"
        />
        <p id="assignes_error" class="error-message titanic">Veuillez assigner au moins un collaborateur</p>
      </div>

      <div class="actions">
        <button type="reset" class="cancel">Annuler</button>
        <button type="submit" class="submit" name="form_ticket">Créer le ticket</button>
      </div>
    </form>
  </section>

  <section class="Modularecell">
    <h2>Fonction de trie</h2>

    <div class="form-group">
      <label for="status_trie">Status :</label>
      <select id="status_trie">
        <option value="tout" selected>Tout</option>
        <option value="Ouvert">Ouvert</option>
        <option value="en cours">En cours</option>
        <option value="En revue">En revue</option>
        <option value="Résolu">Résolu</option>
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
            <td>{{ $tk->assigne }}</td>
            <td><a href="{{ route('tickets.show', $tk->id) }}">Edit</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>

</section>
@endsection

@push('scripts')
  <script src="{{ asset('JS/scriptticket.js') }}"></script>
@endpush
