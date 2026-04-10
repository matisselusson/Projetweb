@extends('layouts.app')
 
@section('title', 'Tableau de bord')
 
@section('content')
<section class="myProfile">
 
  <section class="mystageprofile">
    <div class="profile">
      <h1>{{ $user->name }}</h1>
      <p><strong>Rôle :</strong> {{ $myuser->role }}</p>
      <p><strong>Email :</strong> {{ $user->email }}</p>
      <p><strong>Clients associés :</strong>
        @if($myuser->clients->isEmpty())
          aucun
        @else
          {{ $myuser->clients->pluck('name')->join(', ') }}
        @endif
      </p>
    </div>
  </section>
</section>
@endsection