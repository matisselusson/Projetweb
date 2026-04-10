<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('PHOTO/myLogo.png') }}">
    <title>@yield('title', 'Tableau de bord')</title>
    @stack('styles')
</head>
<body>

<section class="sidebar">
  <a href="{{ route('dashboard') }}" class="logo-container">
    <img src="{{ asset('PHOTO/myLogo.png') }}" alt="logo" class="imageheader">
  </a>

  <nav class="menu">
    <a href="{{ route('projects.index') }}" class="menu-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M3 9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2l0 -9"/>
        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"/>
        <path d="M12 12l0 .01"/>
        <path d="M3 13a20 20 0 0 0 18 0"/>
      </svg>
      <span>Liste Projet</span>
    </a>

    <a href="{{ route('tickets.index') }}" class="menu-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-ticket">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M15 5l0 2"/>
        <path d="M15 11l0 2"/>
        <path d="M15 17l0 2"/>
        <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2"/>
      </svg>
      <span>Liste Ticket</span>
    </a>

    <a href="{{ route('profile.index') }}" class="menu-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-user">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z"/>
        <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z"/>
      </svg>
      <span>Profile</span>
    </a>

    <a href="{{ route('logout') }}" class="menu-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"/>
        <path d="M9 12h12l-3 -3"/>
        <path d="M18 15l3 -3"/>
      </svg>
      <span>Déconnexion</span>
    </a>
  </nav>
</section>

@yield('content')

@stack('scripts')
</body>
</html>
