@extends('layouts.app')

@section('title', 'Créer un contrat')

@section('content')
<section class="mySection">

  <section class="Modularecell">
    <h1>Créer un contrat</h1>
    <form class="form_question" method="POST" action="{{ route('contrats.store') }}">
      @csrf

      <div class="form-group">
        <label for="projet_id">Projet</label>
        <select id="projet_id" name="projet_id" required>
          <option value="" disabled selected>Sélectionnez un projet</option>
          @foreach ($projets as $pr)
            <option value="{{ $pr->id }}">{{ $pr->titre }}</option>
          @endforeach
        </select>
        @error('projet_id')
          <p class="error-message titanic" style="display:block;">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="hours_included">Heures incluses</label>
        <input type="number" id="hours_included" name="hours_included"
               min="0" value="{{ old('hours_included', 0) }}" required />
        @error('hours_included')
          <p class="error-message titanic" style="display:block;">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="hourly_rate">Taux horaire (€)</label>
        <input type="number" id="hourly_rate" name="hourly_rate"
               min="0" step="0.01" value="{{ old('hourly_rate', '0.00') }}" required />
        @error('hourly_rate')
          <p class="error-message titanic" style="display:block;">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="start_date">Date de début</label>
        <input type="date" id="start_date" name="start_date"
               value="{{ old('start_date') }}" />
        @error('start_date')
          <p class="error-message titanic" style="display:block;">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="end_date">Date de fin</label>
        <input type="date" id="end_date" name="end_date"
               value="{{ old('end_date') }}" />
        @error('end_date')
          <p class="error-message titanic" style="display:block;">{{ $message }}</p>
        @enderror
      </div>

      <div class="actions">
        <a href="{{ route('contrats.index') }}" class="cancel"
           style="text-decoration:none;display:flex;align-items:center;justify-content:center;">
          Annuler
        </a>
        <button type="submit" class="submit">Créer le contrat</button>
      </div>

    </form>
  </section>

</section>
@endsection