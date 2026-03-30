
<?php

require_once __DIR__ . "/donnees.php";
require_once __DIR__ . "/Gestion_ticket.php";


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css" />   
<link rel="icon" type="image/png" href="../PHOTO/myLogo.png">
<title>Tableau de bord</title>

</head>
<body>
<section class="sidebar">
  <a href="tableaudebord.php" class="logo-container">
    <img src="../PHOTO/myLogo.png" alt="logo" class="imageheader">
  </a>

  <nav class="menu">
    <a href="./projet.php" class="menu-item">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M3 9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2l0 -9" />
        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
        <path d="M12 12l0 .01" />
        <path d="M3 13a20 20 0 0 0 18 0" />
      </svg>
      <span>Liste Projet</span>
    </a>

    <a href="ticket.php" class="menu-item">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-ticket"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M15 5l0 2" />
        <path d="M15 11l0 2" />
        <path d="M15 17l0 2" />
        <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
      </svg>
      <span>Liste Ticket</span>
    </a>
    <a href="profile.php" class="menu-item">
      <svg 
        xmlns="http://www.w3.org/2000/svg" 
        width="24" 
        height="24" 
        viewBox="0 0 24 24" 
        fill="currentColor" 
        class="icon icon-tabler icons-tabler-filled icon-tabler-user"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
        <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
      </svg>
      <span>Profile</span>
    <a href="page_acceuilMat.php" class="menu-item">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-logout"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
        <path d="M9 12h12l-3 -3" />
        <path d="M18 15l3 -3" />
      </svg>
      <span>Déconnexion</span>
    </a>
  </nav>
</section>
<section class="mySection">
  

  <section class="Modularecell">
    <h1>Créer un ticket</h1>
    <form class="form_question" id="ticketForm"  method="POST">
      
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
            <option value="urgent">Urgent</option>
          </select>
        </div>
      </div>

        <div class="form-group">
          <label for="type">Type</label>
          <select id="type" name="type" required>
            <option value="inclus" selected>Inclus</option>
            <option value="facturable">Facturable</option>
          </select>


        <div class="form-group">
          <label for="projet">Projet</label>
          <select id="projet" name="projet" required>
            <option value="API" selected>API</option>
            <option value="Site Web">Site Web</option>
            <option value="Application Mobile">Application Mobile</option>
            <option value="Back‑Office">Back‑Office</option>
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
    <?php foreach ($projets as $pr): ?>
        <option value="<?= $pr["titre"] ?>"><?= $pr["titre"] ?></option>
    <?php endforeach; ?>
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
      <?php foreach ($tickets as $tk): ?>
        <tr>
    <td><?= htmlspecialchars($tk["titre"], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($tk["priorite"], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($tk["statut"], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($tk["type"], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($tk["projet"], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($tk["assigne"], ENT_QUOTES, 'UTF-8') ?></td>
    <td><a href="Ticket0001.php">Edit</a></td>
      </tr>
    <?php endforeach; ?>

</tbody>


</table>

</section>
  <script src="../JS/scriptticket.js"></script>  
        </body>
        </html>