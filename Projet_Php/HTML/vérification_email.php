
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
    <a href="../HTML/page_acceuilMat.php" class="back-link" aria-label="Retour à l’accueil">
      ← Retour à l’accueil
    </a>
    <img src="../PHOTO/myLogo.png" alt="Logo" class="imageheader" />
  </header>



    <section class="mySectionmdp">
      <div class="Modularecell">
        <h1 id="titre-connexion">Verification d'email</h1>

        <form class="login-form" action="tableaudebord.php" method="post">
          

          <div class="form-group">
            <label for="email">Email</label>
            <input
              id="email"
              name="email"
              type="email"
              placeholder="exemple@domaine.com"
              required
            />
          </div>

          <div class="form-group">

              <button type="submit" class="mybouton" href="#">Envoyé le lien e-mail</button>
            </a>
              <a href="connexion.php" class="mysecondbouton">Revenir à la page précédente</a>
          </div>

        </form>
      </div>
    </section>

</body>
</html>
