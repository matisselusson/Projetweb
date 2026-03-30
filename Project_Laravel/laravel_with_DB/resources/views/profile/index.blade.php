@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<section class="myProfile">
  <section class="mystageprofile">
    <h2>Information de votre Profil</h2>
    <div class="profile">
      <img src="{{ asset('PHOTO/Profil_Image.jpg') }}" alt="Photo de profil" class="imageheader">
      <p>Image de Profil</p>
    </div>

    <div class="profile settings">
      <p>Paramètres de profil</p>
      <p id="desc">Langue actuelle : Français.</p>
      <p id="desctheme">Thème actuel : Clair.</p>
    </div>

    <form id="lang-form" class="profile change-settings">
      <p id="paramtitle">Changement de langue</p>
      <label for="language">Choisir la langue :</label>
      <select id="language">
        <option value="fr">Français</option>
        <option value="en">English</option>
        <option value="de">Deutsch</option>
        <option value="es">Español</option>
      </select>

      <label for="theme">Choisir le thème :</label>
      <select id="theme">
        <option value="light">Clair</option>
        <option value="dark">Sombre</option>
        <option value="contrast">Contraste élevé</option>
      </select>

      <button type="submit">Appliquer</button>
    </form>
  </section>

  <section class="mystageprofile">
    <div class="profile">
      <h1>Jean Dupont</h1>
      <p><strong>Fonction :</strong> Directeur Général</p>
      <p><strong>Email :</strong> jean.dupont@example.com</p>
      <p><strong>Téléphone :</strong> +33 6 12 34 56 78</p>
    </div>
  </section>
</section>
@endsection

@push('scripts')
  <script src="{{ asset('JS/scriptprofil.js') }}"></script>
@endpush
