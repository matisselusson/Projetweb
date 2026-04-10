@extends('layouts.app')

@section('title', 'Tableau de bord')


@section('content')


<section class="mySection">

  <section class="Modularecell">
    <h1>Créer un ticket</h1>
    <form class="form_question" id="ticketForm" method="POST" action="{{ route('tickets.store') }}">
      @csrf


      <div class="form-group">
          <div class="checkbox-group">
              @foreach ($users as $uN)
                  <label class="checkbox-item">
                      <input type="checkbox" name="assigne[]" value="{{ $uN['myuser_id'] }}"> {{ $uN['name'] }}
                  </label>
              @endforeach
          </div>

      <div class="actions">
        <a href="{{ route('tickets.index') }}" class="cancel" style="text-decoration: none; display: flex; align-items: center; justify-content: center;">Annuler</a>
        <button type="submit" class="submit">Créer le ticket</button>
      </div>
    </form>
  </section>


@push('scripts')
  <script src="{{ asset('JS/scriptticket.js') }}"></script>
@endpush
