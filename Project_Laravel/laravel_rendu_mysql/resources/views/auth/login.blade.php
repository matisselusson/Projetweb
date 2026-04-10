<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('CSS/style.css') }}" />
  <link rel="icon" type="image/png" href="{{ asset('PHOTO/myLogo.png') }}">
</head>
<body>
  <header class="myheadermdp">
    <a href="{{ route('home') }}" class="back-link" aria-label="Retour à l'accueil">
      ← Retour à l'accueil
    </a>
    <img src="{{ asset('PHOTO/myLogo.png') }}" alt="Logo Evil Corp" class="imageheader">
  </header>

  <section class="mySectionmdp">
    <div class="Modularecell">
      <div class="login-card">
        <div class="card-header">
          <h1 id="titre-connexion">Connexion</h1>
          <p>Bienvenue ! Entrez vos identifiants pour continuer.</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="login-form" action="{{ route('login') }}" method="POST">
          @csrf

          <div class="form-group">
            <label for="email">Adresse e-mail</label>
            <input
              id="email"
              name="email"
              type="email"
              placeholder="exemple@domaine.com"
              value="{{ old('email') }}"
              required
              autofocus
              autocomplete="username"
            >
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>

          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input
              id="password"
              name="password"
              type="password"
              placeholder="••••••••"
              name="password"
              required
              autocomplete="current-password"
            >
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>

          <div class="form-group">
            <button type="submit" class="mybouton">Se connecter</button>
            
            @if (Route::has('jaaj.request'))
                <a href="{{ route('password.request') }}" class="mysecondbouton">Mot de passe oublié ?</a>
            @endif
          </div>
        </form>
      </div>
    </div>
  </section>
</body>
</html>