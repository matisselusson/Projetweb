
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="icon" type="image/png" href="../PHOTO/myLogo.png">
</head>
<body>
  <header class="myheadermdp">
    <a href="page_acceuilMat.php" class="back-link" aria-label="Retour à l'accueil">
      ← Retour à l'accueil
    </a>
    <img src="../PHOTO/myLogo.png" alt="Logo Evil Corp" class="imageheader">
  </header>


    <section class="mySectionmdp">
        <div class="Modularecell">
    <div class="login-card">
      <div class="card-header">
        <h1 id="titre-connexion">Connexion</h1>
        <p>Bienvenue ! Entrez vos identifiants pour continuer.</p>
      </div>

      <form class="login-form" action="tableaudebord.php">
        
        <div class="form-group">
          <label for="email">Adresse e-mail</label>
          <input
            id="email"
            name="email"
            type="email"
            placeholder="exemple@domaine.com"
            required
            autocomplete="email"
          >
        </div>

        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input
            id="password"
            name="password"
            type="password"
            placeholder="••••••••"
            required
            minlength="6"
            autocomplete="current-password"
          >
        </div>

        <div class="form-group">
          <button type="submit" class="mybouton">Se connecter</button>
          <a href="vérification_email.php" class="mysecondbouton">Mot de passe oublié ?</a>
        </div>

      </form>
    </div>
    </div>
  </section>

</body>
</html>
